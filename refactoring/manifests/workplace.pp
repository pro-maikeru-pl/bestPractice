class workplace {
  include administration
}
#######################################
class administration {
  include ruby
  package { 'install augeas-tools':
    ensure => present,
    name => 'augeas-tools',
  }
  package { 'puppet-module':
    ensure => 'installed',
    provider => 'gem',
    require => Package["rubygems"],
  }
  package { 'install openssh-server':
    ensure => present,
    name => 'openssh-server',
  }
  package { 'install acl package':
    ensure => present,
    name => 'acl',
  }
  exec { 'add acl to filesystem':
    path => '/usr/bin:/usr/sbin:/bin',
    command => 'cp /etc/fstab /etc/fstab.bak && awk \'$2~"^/(ci)*$" && $4 !~ "(^|,)acl(,|$)" {$4="acl,"$4}1\' OFS="\t" /etc/fstab > /tmp/fstab && cat /tmp/fstab > /etc/fstab && rm /tmp/fstab && mount -a',
    unless => "grep -q '\\Wacl\\W' /etc/fstab",
  }
  package { 'install mc':
    ensure => present,
    name => 'mc',
  }
  package { 'install git':
    ensure => present,
    name => 'git',
  }
}
#######################################
class ruby {
  package { "ruby":
    ensure => installed,
  }
  package { "rubygems":
    ensure => installed,
    require => Package["ruby"],
  }
}