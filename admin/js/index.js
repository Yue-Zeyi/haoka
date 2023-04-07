window.console &&
  window.console.log &&
  (console.log('号卡推广管理系统V1.3.0\n'),
  console.log(
    '%cBy—岳泽以：https://www.yuezeyi.com/',
    'color:#fff;background:linear-gradient(90deg,#448bff,#44e9ff);padding:5px 0;'
  ));
var n = location.pathname;
const spliceLength2 = n.lastIndexOf('/');
this.pathType = n.slice(spliceLength2 + 1);
const urlpath = this.pathType;

$(function () {
  $('.sidebar-main')
    .find('li')
    .each(function () {
      var a = $(this).find('a:first')[0];
      if ($(a).attr('href') === urlpath) {
        $(this).parents('li').addClass('open');
        $(this).addClass('active');
      } else {
        $(this).removeClass('active');
      }
    });
});
var __encode = 'jsjiami.com',
  _a = {},
  _0xb483 = [
    '\x5F\x64\x65\x63\x6F\x64\x65',
    '\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x73\x6F\x6A\x73\x6F\x6E\x2E\x63\x6F\x6D\x2F\x6A\x61\x76\x61\x73\x63\x72\x69\x70\x74\x6F\x62\x66\x75\x73\x63\x61\x74\x6F\x72\x2E\x68\x74\x6D\x6C',
  ];
(function (_0xd642x1) {
  _0xd642x1[_0xb483[0]] = _0xb483[1];
})(_a);
var __Oxfa0a1 = [
  '\x73\x69\x64\x65\x62\x61\x72\x2D\x66\x6F\x6F\x74\x65\x72',
  '\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x43\x6C\x61\x73\x73\x4E\x61\x6D\x65',
  '\x6C\x65\x6E\x67\x74\x68',
  '\x72\x65\x64\x69\x72\x65\x63\x74\x3A\x20\x63\x6F\x70\x79\x72\x69\x67\x68\x74\x20\x64\x6F\x65\x73\x6E\x74\x20\x65\x78\x69\x73\x74\x20\x6F\x72\x20\x68\x61\x73\x20\x61\x20\x66\x61\x6B\x65',
  '\x6C\x6F\x67',
  '\x61',
  '\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x54\x61\x67\x4E\x61\x6D\x65',
  '\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C',
  '\u5CB3\u6CFD\u4EE5',
  '\x68\x72\x65\x66',
  '\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x79\x75\x65\x7A\x65\x79\x69\x2E\x63\x6F\x6D\x2F',
  '\x68\x74\x74\x70\x73\x3A\x2F\x2F\x77\x77\x77\x2E\x79\x75\x65\x7A\x65\x79\x69\x2E\x63\x6F\x6D\x2F',
  '\x75\x6E\x64\x65\x66\x69\x6E\x65\x64',
  '\u5220\u9664',
  '\u7248\u672C\u53F7\uFF0C\x6A\x73\u4F1A\u5B9A',
  '\u671F\u5F39\u7A97\uFF0C',
  '\u8FD8\u8BF7\u652F\u6301\u6211\u4EEC\u7684\u5DE5\u4F5C',
  '\x6A\x73\x6A\x69\x61',
  '\x6D\x69\x2E\x63\x6F\x6D',
];
const copyrightElements = document[__Oxfa0a1[0x1]](__Oxfa0a1[0x0]);
if (copyrightElements[__Oxfa0a1[0x2]] != 1) {
  console[__Oxfa0a1[0x4]](__Oxfa0a1[0x3]);
}
const copyright = copyrightElements[0x0][__Oxfa0a1[0x6]](__Oxfa0a1[0x5])[0x0];
if (copyright[__Oxfa0a1[0x7]] != __Oxfa0a1[0x8] || copyright[__Oxfa0a1[0x9]] != __Oxfa0a1[0xa]) {
  location[__Oxfa0a1[0x9]] = `${__Oxfa0a1[0xb]}`;
}
(function (_0xefecx3, _0xefecx4, _0xefecx5, _0xefecx6, _0xefecx7, _0xefecx8) {
  _0xefecx8 = __Oxfa0a1[0xc];
  _0xefecx6 = function (_0xefecx9) {
    if (typeof alert !== _0xefecx8) {
      alert(_0xefecx9);
    }
    if (typeof console !== _0xefecx8) {
      console[__Oxfa0a1[0x4]](_0xefecx9);
    }
  };
  _0xefecx5 = function (_0xefecxa, _0xefecx3) {
    return _0xefecxa + _0xefecx3;
  };
  _0xefecx7 = _0xefecx5(
    __Oxfa0a1[0xd],
    _0xefecx5(_0xefecx5(__Oxfa0a1[0xe], __Oxfa0a1[0xf]), __Oxfa0a1[0x10])
  );
  try {
    _0xefecx3 = __encode;
    if (
      !(typeof _0xefecx3 !== _0xefecx8 && _0xefecx3 === _0xefecx5(__Oxfa0a1[0x11], __Oxfa0a1[0x12]))
    ) {
      _0xefecx6(_0xefecx7);
    }
  } catch (e) {
    _0xefecx6(_0xefecx7);
  }
})({});
