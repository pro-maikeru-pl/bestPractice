class php {
  include curlInstalled
  include phpInstalled
  include phpAddons
}
class curlInstalled {
  package { "curl" :
    ensure => installed,
  }
}
class phpInstalled {
  package { "php5" :
    ensure => installed,
  }
}

class phpAddons {
  package { "libapache2-mod-php5" :
    ensure => installed,
    require => Package["php5"],
    notify => Service["apache2"],
  }
  package { "php5-cli" :
    ensure => installed,
    require => Package["php5"],
    notify => Service["apache2"],
  }
  package { "php5-xdebug" :
      ensure => installed,
      require => Package["php5"],
      notify => Service["apache2"],
    }
}
