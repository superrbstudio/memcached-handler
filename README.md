# Symfony Memcached Handler
A handler for Memcached to use for Session handling and caching in Symfony

## Install the bundle
`composer require superrb/memcached-handler`

## Create some environment variables
```bash
###> superrb/memcached-handler ###
MEMCACHED_HOST=127.0.0.1
MEMCACHED_PORT=11211
MEMCACHED_EXPIRE=14400
MEMCACHED_PREFIX=prefix_
###< superrb/memcached-handler ###
```

## Storing sessions in Memcached
Add the following configuration to `config/packages/framework.yaml`
```yaml
framework:
    session:
        handler_id: superrb_memcached_handler.session.handler.memcached
```
## Other uses
You can use use the handler to create services for anything else you might want to store in Memcached

## Issues and Troubleshooting
All issues: tech@superrb.com
