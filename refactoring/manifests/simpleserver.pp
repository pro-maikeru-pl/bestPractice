class simpleserver {
  include apacheInstalledAndConfigured
}
class apacheInstalledAndConfigured {
  require apacheInstalled
  include apacheConfigured
}
class apacheInstalled {
  package { 'apache2':
    ensure => present,
    name => 'apache2',
  }
  service { "apache2":
      ensure => "running",
      enable => "true",
      require => Package["apache2"]
  }
}
class apacheConfigured {
  define apache::loadmodule () {
    exec { "/usr/sbin/a2enmod $name" :
      unless => "/bin/readlink -e /etc/apache2/mods-enabled/${name}.load",
      notify => Service[apache2],
      require => Package["apache2"]
    }
  }
  exec { "set ServerName in apache":
    path => "/usr/bin:/usr/sbin:/bin",
    notify => Service["apache2"], # this sets up the relationship
    unless => "grep -q '^[ ]*ServerName ' /etc/apache2/httpd.conf",
    command => "echo 'ServerName localhost' >> /etc/apache2/httpd.conf",
    require => Package["apache2"]
  }
  augeas { "set apache configuration to no Indexes and allow overwrite for /var/www":
    notify => Service["apache2"], # this sets up the relationship
    context => "/files/etc/apache2/sites-available/default",
    changes => [
      "set VirtualHost/Directory[arg='/var/www/']/*[self::directive='AllowOverride']/arg All",
      "rm VirtualHost/Directory[arg='/var/www/']/*[self::directive='Options']",
      "set VirtualHost/Directory[arg='/var/www/']/directive[0] Options",
      "set VirtualHost/Directory[arg='/var/www/']/*[self::directive='Options']/arg[0] '-Indexes'",
      "set VirtualHost/Directory[arg='/var/www/']/*[self::directive='Options']/arg[0] 'FollowSymLinks'",
      "set VirtualHost/Directory[arg='/var/www/']/*[self::directive='Options']/arg[0] 'MultiViews'",
    ],
    require => Package["apache2"]
  }
# enable mod rewrite for apache if not enabled
  apache::loadmodule { "rewrite": }
}
