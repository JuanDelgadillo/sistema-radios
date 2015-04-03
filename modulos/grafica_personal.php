<?php

session_start();

include "../config/conection.php";

?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 14">
<link rel=File-List href="test_archivos/filelist.xml">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<style id="test_19693_Styles">
<!--table
  {mso-displayed-decimal-separator:"\,";
  mso-displayed-thousand-separator:"\.";}
.xl1519693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl6319693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:normal;}
.xl6419693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:normal;}
.xl6519693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri1;
  mso-generic-font-family:auto;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl6619693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri1;
  mso-generic-font-family:auto;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl6719693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:normal;}
.xl6819693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl6919693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:general;
  vertical-align:middle;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:normal;}
.xl7019693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:"Medium Time";
  text-align:general;
  vertical-align:middle;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl7119693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:"Medium Time";
  text-align:center;
  vertical-align:middle;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl7219693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:normal;}
.xl7319693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:normal;}
.xl7419693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:normal;}
.xl7519693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl7619693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl7719693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl7819693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl7919693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl8019693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl8119693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl8219693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border-top:none;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl8319693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl8419693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:none;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl8519693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl8619693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl8719693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl8819693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl8919693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl9019693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl9119693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl9219693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl9319693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl9419693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl9519693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl9619693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl9719693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl9819693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl9919693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl10019693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl10119693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl10219693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl10319693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl10419693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl10519693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl10619693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl10719693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:general;
  vertical-align:middle;
  border-top:none;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl10819693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl10919693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:.5pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl11019693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:.5pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl11119693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl11219693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:1.0pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl11319693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl11419693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl11519693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl11619693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl11719693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:none;
  border-bottom:.5pt solid windowtext;
  border-left:1.0pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl11819693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:none;
  border-bottom:.5pt solid windowtext;
  border-left:none;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl11919693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:none;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl12019693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl12119693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl12219693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl12319693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl12419693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl12519693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl12619693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl12719693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl12819693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl12919693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl13019693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl13119693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl13219693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:.5pt solid windowtext;
  border-left:1.0pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl13319693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:.5pt solid windowtext;
  border-left:none;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl13419693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:none;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl13519693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl13619693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:#BFBFBF;
  mso-pattern:black none;
  white-space:nowrap;}
.xl13719693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:9.0pt;
  font-weight:700;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:general;
  vertical-align:middle;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl13819693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:none;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl13919693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl14019693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:none;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl14119693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:none;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl14219693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl14319693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl14419693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl14519693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
.xl14619693
  {padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:10.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Sans, sans-serif;
  mso-font-charset:1;
  mso-number-format:General;
  text-align:center;
  vertical-align:bottom;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  mso-background-source:auto;
  mso-pattern:auto;
  white-space:nowrap;}
-->
</style>
<script>
  
  window.addEventListener("load",function(){
    var hora = document.querySelector("#hora");
    var actual = new Date();
    var hora = actual.getHours();
    var minuto = actual.getMinutes();
    var segundo = actual.getSeconds();
    if(hora < 10)
      hora = "0"+hora; 
    if(minuto < 10)
      minuto = "0"+minuto;
    if(segundo < 10)
      segundo = "0"+segundo;
    if(hora < 12)
      document.querySelector("#hora").innerHTML = hora+":"+minuto+":"+segundo+" am";
    else
      document.querySelector("#hora").innerHTML = (hora-12)+":"+minuto+":"+segundo+" pm";
    window.print();
  },false);

</script>
</head>

<body>

<div id="test_19693" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=960 style='border-collapse:
 collapse;table-layout:fixed;width:720pt'>
 <col width=64 span=15 style='width:48pt'>
 <tr height=20 style='height:15.0pt;border-top:1px solid black;border-right:1px solid black;'>
  <td colspan=15 rowspan=5 height=100 width=960 style='height:75.0pt;
  width:720pt' align=left valign=top><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:2px;margin-top:4px;width:110px;
  height:93px'><img width=110 height=93
  src="../assets/images/logo.png" v:shapes="Imagen_x0020_1"></span><span
  style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td colspan=15 rowspan=5 height=100 class=xl6319693 width=960
    style='height:75.0pt;width:720pt'>REPÚBLICA BOLIVARIANA DE VENEZUELA <br>
        ESTADO ZULIA<br>
        ALCALDÍA DEL MUNICIPIO MARACAIBO<br>
        INSTITUTO PÚBLICO POLICÍA MUNICIPAL DE MARACAIBO<br>
        UNIDA DE TELECOMUNICACIONES</td>
   </tr>
  </table>
  </span></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 </tr>
 <tr height=20 style='height:15.0pt'>
 </tr>
 <tr height=20 style='height:15.0pt'>
 </tr>
 <tr height=20 style='height:15.0pt'>
 </tr>
 <tr height=21 style='height:15.75pt;border-right:1px solid black;'>
  <td colspan=2 height=21 class=xl6519693 style='height:15.75pt'>Fecha:</td>
  <td class=xl6719693 width=64 style='width:48pt'><?=date("d-m-Y")?></td>
  <td class=xl6719693 width=64 style='width:48pt'></td>
  <td class=xl6719693 width=64 style='width:48pt'></td>
  <td colspan=2 class=xl6819693></td>
  <td class=xl6919693 width=64 style='width:48pt'></td>
  <td class=xl6719693 width=64 style='width:48pt'></td>
  <td colspan=2 class=xl6819693></td>
  <td class=xl7019693></td>
  <td class=xl6719693 width=64 style='width:48pt'>Hora:</td>
  <td colspan=2 class=xl7119693><span id="hora"></span></td>
 </tr>
 <tr height=21 style='height:15.75pt;'>
  <td colspan=15 height=21 class=xl7219693 width=960 style='border-right:1.0pt solid black;
  height:15.75pt;width:720pt'>ESTADÍSTICA DEL PERSONAL</td>
 </tr>
 <tr height=21 style='height:15.75pt;border-right:1px solid black;'>
  <td height=21 class=xl7519693 style='height:15.75pt'>&nbsp;</td>
  <td class=xl1519693></td>
  <td class=xl1519693></td>
  <td class=xl1519693></td>
  <td class=xl1519693></td>
  <td class=xl1519693></td>
  <td class=xl1519693></td>
  <td class=xl1519693></td>
  <td class=xl7619693></td>
  <td class=xl7619693></td>
  <td class=xl7619693></td>
  <td class=xl7619693></td>
  <td class=xl7619693></td>
  <td class=xl7619693></td>
  <td class=xl7619693></td>
 </tr>

  <tr height=21 style='height:15.75pt;border-right:1px solid black;'>
  <td height=21 class=xl7519693 style='height:15.75pt'>&nbsp;</td>
  <td colspan=13 class=xl1519693>
      
  <table width="30%" border="0" align="center"  >
      <tr>
        <td>
            <center><img src="barras.php"   height="420" /></center><!--barra grafica-->
        </td>
      </tr>

    

 

 </table>
  </td>
  <td class=xl7619693></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl9219693 style='height:15.75pt;border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl9319693 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl9319693 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl9319693 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl9319693 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl9519693 style='border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl9519693 style=''>&nbsp;</td>
  <td colspan=2 class=xl9519693 style='border-right:1.0pt solid black'>&nbsp;</td>
 </tr>




</table>

</div>


<!----------------------------->
<!--FINAL DE LOS RESULTADOS DEL ASISTENTE PARA PUBLICAR COMO PÁGINA WEB DE
EXCEL-->
<!----------------------------->
</body>

</html>
