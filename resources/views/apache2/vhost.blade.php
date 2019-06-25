<VirtualHost *:80>
    # The ServerName directive sets the request scheme, hostname and port that
    # the server uses to identify itself. This is used when creating
    # redirection URLs. In the context of virtual hosts, the ServerName
    # specifies what hostname must appear in the request's Host: header to
    # match this virtual host. For the default virtual host (this file) this
    # value is not decisive as it is used as a last resort host regardless.
    # However, you must set it for any further virtual host explicitly.

    ServerName {{ $virtual_host->get_server_name() }}

<?php $aliases = $virtual_host->get_server_alias() ?>
@if ($aliases)
    ServerAlias @foreach($aliases as $alias){{ $alias }}@endforeach
@endif

    ServerAdmin {{ $virtual_host->get_server_admin() }}

    DirectoryIndex index.php index.html
    DocumentRoot /var/www/projects/{{ $virtual_host->get_project_folder() }}
    <Directory /var/www/projects/{{ $virtual_host->get_project_folder() }}>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
    </Directory>


    # Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
    # error, crit, alert, emerg.
    # It is also possible to configure the loglevel for particular
    # modules, e.g.
    #LogLevel info ssl:warn

    ErrorLog ${APACHE_LOG_DIR}/{{ $virtual_host->get_project_name() }}-error.log
    CustomLog ${APACHE_LOG_DIR}/{{ $virtual_host->get_project_name() }}-access.log combined

    # For most configuration files from conf-available/, which are
    # enabled or disabled at a global level, it is possible to
    # include a line for only one particular virtual host. For example the
    # following line enables the CGI configuration for this host only
    # after it has been globally disabled with "a2disconf".
    #Include conf-available/serve-cgi-bin.conf
</VirtualHost>

# vim: syntax=apache ts=4 sw=4 sts=4 sr noet