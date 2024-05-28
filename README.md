# Chad

## Description

Realtime messaging app using Reverb.
Has support for private messages as well as rooms.

## Tasks

- [ ] tests

## Development

### Migrate and seed databse

```shell
php artisan migrate:fresh --seed
```

### Run services

```shell
npm run dev
```

```shell
php artisan reverb:start
```

```shell
php artisan queue:listen --queue=messages
```
