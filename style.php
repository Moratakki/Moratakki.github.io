<?php header("Content-type: text/css; charset: UTF-8");
include "portfolio_db.php" ?>
html,
body {
width: 100%;
height: 100%;
margin: 0;
padding: 0;
background: #171718;
z-index: 1;
font-family: "Lucida Console", Monaco, monospace;
color: #ffcdcd;
}

header {
box-sizing: border-box;
padding: 30px;
width: 100%;
height: 80px;
background-color: #171718;
}

header::after {
margin: 0;
padding: 0;
left: 0;
top: 80px;
position: absolute;
content: "";
width: 100%;
height: 1px;
background-color: #454545;
}

.header {
float: right;
margin: 0 15px;
border-left: 4px ridge #851818;
padding-left: 10px;
}

.header span {
font-weight: 700;
}

a {
color: #ffcdcd;
text-decoration: none;
}

a:hover {
color: #fa9393;
}

.main {
min-height: calc(100vh - 143px);
}

footer {
vertical-align: bottom;
height: 20px;
text-align: center;
font-size: 12px;
}

/* ========================INDEX.HTML======================== */
.photo {
width: 100%;
text-align: right;
}

#me {
margin-top: 50px;
margin-right: 10px;
border: 3px solid #fff;
border-radius: 50%;
width: 400px;
height: 400px;
animation: 2s infinite alternate shadow-flow;
}

pre {
border-left: 2px dashed #ffcdcd;
padding-top: 16px;
padding-left: 10px;
padding-bottom: 0;
box-sizing: border-box;
font-size: 20px;
}

@keyframes shadow-flow {
from {
box-shadow: 0px 0px 35px rgb(239, 36, 36);
}

to {
box-shadow: 0px 0px 15px rgb(36, 94, 239);
}
}

.table {
margin: 10px auto;
display: table;
}

.table-row {
display: table-row;
}

.table-cell {
width: 550px;
display: table-cell;
vertical-align: middle;
}

.table-cell h1 {
font-size: 2.5em;
}

/* ========================CONTACTS.HTML======================== */
.socials {
list-style: none;
text-align: center;
}

.socials li {
padding: 30px 0;
font-size: 36px;
}

.socials li a {
padding: 10px;
border: 1px solid #ffcdcd;
border-radius: 15px;
}

.contacts {
font-size: 64px;
margin-left: 50px;
text-align: center;
}

/* ========================SKILLS.HTML======================== */
.prog-skills {
padding: 20px;
width: 800px;
margin: 10px auto;
border: 2px dashed #ffcdcd;
}

.skill {
width: 700px;
background-color: #717171;
border: 1px solid rgb(255, 255, 255);
border-radius: 10px;
margin: 12px auto;
color: #000;
font-weight: 700;
}

.python,
.C++,
.JS,
.C# {
padding: 5px;
border-radius: 10px;
width:
<?php ?>%;
background-color: #0a9a05;
}

.C++ {
width:
<?php ?>%;
background-color: #619f10;
}

.JS {
width:
<?php ?>%;
background-color: #8e9f10;
}

.C# {
width:
<?php ?>%;
background-color: #9f6110;
}

.python::after {
text-align: right;
display: none;
content: "
<?php ?>%";
font-weight: normal;
font-size: 12px;
}

.C++::after {
text-align: right;
display: none;
content: "
<?php ?>%";
font-weight: normal;
font-size: 12px;
}

.JS::after {
text-align: right;
display: none;
content: "
<?php ?>%";
font-weight: normal;
font-size: 12px;
}

.C#::after {
text-align: right;
display: none;
content: "
<?php ?>%";
font-weight: normal;
font-size: 12px;
}

.skill:hover .s90::after,
.skill:hover .s60::after,
.skill:hover .s55::after,
.skill:hover .s40::after {
display: inline;
}

.skills {
text-align: center;
font-size: 3em;
}