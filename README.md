#[phabricator-yubikey](https://github.com/etcinit/phabricator-yubikey)

Adds support for Yubikey OTP as MFA method in Phabricator

## About

### The good

- Seems to work just fine
- Really easy to setup: All you need is an ID/token combination for a Yubikey
  validation server (or, in most cases, Yubicloud)

### The bad and perhaps ugly

- No unit tests yet :( :(
- May or may not maintain in the future
- It will most likely cause your production servers to light up in flames

## Setup

- Clone next to your `phabricator` and `libphutil` directories.
- Add the library to the `load-libraries` key in the config (See:
  https://secure.phabricator.com/book/phabricator/article/libraries/ for more
  info).
- Set the API ID and key:

```
$ cd /path/to/phabricator
$ ./bin/config set yubikey.api_id XXXXXX
$ ./bin/config set yubikey.api_key XXXXXXXXXXXXXXXXXXXXXXXX
```

- Go and get some coffee.
