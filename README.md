# Simple Shields

> A very simple, stable, easy deploy `Shields badge service` with PHP & SVG. Inspired by Shields IO.

![http://shields.hust.cc/](http://shields.hust.cc/Badge-Shields-orange.svg)
![http://shields.hust.cc/](http://shields.hust.cc/Shields-Perfect-green.svg)
![http://shields.hust.cc/](http://shields.hust.cc/Shields-Simple-yellow.svg)
![http://shields.hust.cc/](http://shields.hust.cc/Shields-Stable-blue.svg)
![http://shields.hust.cc/](http://shields.hust.cc/Shields-EasyDeploy-ff69b4.svg)


![http://shields.hust.cc/](http://shields.hust.cc/亲爱的-么么哒-orange.svg)
![http://shields.hust.cc/](http://shields.hust.cc/Hustcc-( ˘ ³˘)♥-ff69b4.svg)

 - **Shields.IO style**. Pixel-perfect, Retina-ready, Fast, Consistent, Hackable, No tracking.
 - Really **Simple**, only one PHP file with 60 rows, no dependence.
 - **Easy deploy** and **Stable**, Apache or nginx.


## 1. How to Use ?

> The url format: **http://shields.hust.cc/<SUBJECT>-<STATUS>-<COLOR>.svg**

- **subject**: the left part TEXT of shields.
- **status**: the right part TEXT of shields.
- **color**: the right part COLOR of shields. `red`, `orange`, `yellow`, `brightgreen`, `green`, `yellowgreen`, `blue`, `grey`, `lightgrey` are optional color name, or you can use `RGB` color, e.g. ff69b4.


## 2. Deploy your Own service

1. Download the code, put it into the `apache` or `nginx` website dir.
2. Add vhost on apache or nginx.
3. **optional step**: Config the url rewrite. use `.htaccess` on apache([here is the file](.htaccess)), use `location config` on nginx([here is the file](nginx-shields.conf)).
4. Binding you domain.

**MEMO**: if you don't rewrite url, you can use **http://you-domain/api.php?subject=<SUBJECT>&status=<STATUS>&color=<COLOR>**


## 3. Contribution

 - Fork the repo.
 - Add your code, and pull a request.
 - Or add a issue.

Thanks for Shields IO, inspired by it. The 404 page from internet.


## LICENSE

MIT