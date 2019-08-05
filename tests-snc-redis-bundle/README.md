# Setup 

Start redis instances:

```
make start
```

Start web server:

```
composer install
ln -srf <path-to-the-bundle>/SncRedisBundle vendor/snc/redis-bundle
symfony server:start
```

# References

- [Official redis cluster tutorial](https://redis.io/topics/cluster-tutorial)
- [Example of redis cluster setup with docker compose](https://github.com/itsmetommy/docker-redis-cluster)
