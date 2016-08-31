# Simple Shields

> A very simple `Shields Service` with PHP. Inspired by Shields IO.

![http://shields.hust.cc/](http://shields.hust.cc/Shields-Perfect-green.svg)
![http://shields.hust.cc/](http://shields.hust.cc/Shields-Simple-yellow.svg)
![http://shields.hust.cc/](http://shields.hust.cc/Shields-EasyDeploy-ff69b4.svg)

 - Pixel-perfect, Retina-ready, Fast, Consistent, Hackable, No tracking.
 - Really Simple, only one PHP file with 60 rows.
 - Easy deploy and stable, Apache or nginx.


## 1. How to Use ?

`http://shields.hust.cc/<SUBJECT>-<STATUS>-<COLOR>.svg`

- **subject**: the `left part TEXT` of shields.
- **status**: the `right part TEXT` of shields.
- **color**: the `left part COLOR` of shields. `red`, `orande`, `yellow`, `brightgreen`, `green`, `yellowgreen`, `blue`, `grey`, `lightgrey` are Optional color name, or use `RGB`. e.g. ff69b4.


## 2. Deploy you service

1. Download the code, put it into the `apache` or `nginx` website dir.
2. Add vhost of apache or nginx.
3. Config the url rewrite. use `.htaccess` on apache, use `location config` on nginx.
4. Binding you domain.


## 3. Contribution

 - fork the repo.
 - add your code, and pull a request.
 - or add a issue.

Thanks for Shields IO, inspired by it.

## LICENSE

MIT