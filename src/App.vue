<template>
  <div id="app" v-cloak>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: "app"
};
</script>

<style lang="stylus">
.b-submit {
  background: #ce3d3e !important;
  border: none !important;
  outline: none !important;
}
// $fontred = #ce3d3e
[v-cloak] {
  display: none;
}
.el-form-item__content {
  text-align: center;
}
.el-form {
  width: 90%;
}
.el-message-box {
  width: auto !important;
}
.el-message-box__btns {
  text-align: center !important;
}
.el-button--default:focus, .el-button--default:hover {
  color: rgb(206, 61, 62) !important;
  outline: none !important;
  background: rgba(206, 61, 62, .2) !important;
  border: 1px solid rgb(206, 61, 62) !important;
}
// .mint-swipe-indicator {
//   opacity: 1 !important;
// }
// .el-button--primary.is-active, .el-button--primary:active {
//   background: $fontred !important;
// }
// .el-button--primary:hover {
//   background: rgba(206, 61, 62, .8) !important;  
// }

/* 上传头像 */
.vicp-wrap {
    width: auto !important;
    height: auto !important;
}
.vue-image-crop-upload .vicp-wrap .vicp-close {
    right: 0 !important;
    top: 0 !important;
}
.vue-image-crop-upload .vicp-wrap {
  bottom: 50px !important;
}
.vicp-crop-left {
  float: none !important;
}
.vicp-crop-right {
  float: none !important;
}
.vicp-step2 {
  margin-left: 40px !important;
}
.vue-image-crop-upload .vicp-wrap .vicp-operate a {
  color: #ce3d3e !important;
}
/**
 * Eric Meyer's Reset CSS v2.0 (http://meyerweb.com/eric/tools/css/reset/)
 * http://cssreset.com
 */
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video,
input {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font-weight: normal;
  vertical-align: baseline;
}

/* HTML5 display-role reset for older browsers */
article,
aside,
details,
figcaption,
figure,
footer,
header,
menu,
nav,
section {
  display: block;
}

body {
  line-height: 1;
  margin: 0;
}

blockquote,
q {
  quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

/* custom */
a {
  color: #7e8c8d;
  text-decoration: none;
  -webkit-backface-visibility: hidden;
}

li {
  list-style: none;
}

::-webkit-scrollbar {
  width: 5px;
  height: 5px;
}

::-webkit-scrollbar-track-piece {
  background-color: rgba(0, 0, 0, 0.2);
  -webkit-border-radius: 6px;
}

::-webkit-scrollbar-thumb:vertical {
  height: 5px;
  background-color: rgba(125, 125, 125, 0.7);
  -webkit-border-radius: 6px;
}

::-webkit-scrollbar-thumb:horizontal {
  width: 5px;
  background-color: rgba(125, 125, 125, 0.7);
  -webkit-border-radius: 6px;
}

html,
body {
  width: 100%;
}

body {
  -webkit-text-size-adjust: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
</style>



