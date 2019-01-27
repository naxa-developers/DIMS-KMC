<link rel="stylesheet" href="<?php echo base_url();?>assets/css/popuptableinmap.css"/>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.5.2/randomColor.js"></script>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />

<script type="text/javascript" src="<?php echo base_url();?>assets/js/leaflet.label.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/changunarayan.js"></script>
<style>
  a#viewall {
      width: 235px;
  }
  .modal-content{
    background-color: #f5f4f4;
  }
  input.size-box {
      width: 100%;
      height: 50px;

  }

  /* div#dialog {
      margin-top: 215px !important;
      margin-left: -505px !important;
  } */
  .fa-trash{
    color: red;
  }
  .treeview ul.show{
  height: auto;
  max-height: 100px;
  }

  .text-size {
      margin-top: 10px;
  }
  .leaflet-left{
    left: 21.5%;
  }
  .leaflet-right{
    /*right:260px;*/
  }

  ul.nav.nav-tabs{
    font-size: 14px;
    font-weight: bold;
    border-bottom-color: transparent;
    /*  margin-left: 10px;*/
    margin-top: 0px;
    background: #0056b3;
    border-bottom: none;
  }

  ul.nav.nav-tabs a{

    padding:10px;
    color: white;
  }

  ul.nav.nav-tabs a.active, ul.nav.nav-tabs a.active:hover, ul.nav.nav-tabs a.active:focus{
    background: white;
    color: black;
    border-color: white;
  }

  ul.nav.nav-tabs a:hover{

    text-decoration:none;
    color: black;
  }
  li.basemap.chevron1 {
    width: 40px;
    -moz-transition-duration: 0.4s;
    -o-transition-duration: 0.4s;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    display: inline-block;
  }
  img.test-icon.chevron {
    margin-left: 10px;
  }
  img.filter-icon {
    height: 15px;
    margin-right: 5px;
  }

  li.basemap.chevron2 {
    width: 40px;
  }
  li.active.layer.map {
    height: 25px;
  }
  li.basemap.map {
    height: 25px;
  }

  li.basemap {
    background-color: #0056b3;
    /* height: 40px; */
  }

  li.basemap img:hover {

    transition: all 0.2s ease-in;
  }
  li.active.layer img:hover {

    transition: all 0.2s ease-in;
  }

  li.active.layer {
    background-color: #0056b3;
    height: 32px;
  }

  .panel-heading.right {
    /*  float: right;
    margin-right: 7px;*/
  }

  li.list-group-item {
    margin-bottom: 5px;
    padding: .55rem 1.25rem;
  }

  li.list-group-item:hover{
    background-color: #eee;
  }


  .half {
    float: left;
    font-size: 11px;
  }

  ul.list-group.cate {
    padding: 0px;
  }

  .tab-content .cate {
    margin-top: 5px;
    background: #fff;
    padding: 10px;
  }

  div#categories {
    background-color: #fff;
  }

  div#filter {
    background-color: #fff;
    margin-top: 10px;
  }

  .tab-content p {
    margin: 0.5em;
  }

  .panel.panel-info {
    overflow: hidden;
    width: 250px;
    background-color: #f3f3f3;
    padding: 5px;
    border-radius: 0px;
    float: right;
    height: 545px;
    font-size: 11px;
    border: 1px solid #dbdbdb !important;
  }
  span.ic {
    font-size: 14px;
    font-weight: 600;
  }

  .modal-window>div {
    width: 350px;
  }

  .modal-window {
    position: fixed;
    background-color: rgba(0, 0, 0, 0.5);
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 7;
    opacity: 0;
    pointer-events: none;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;

  }

  .modal-window:target {
    opacity: 1;
    pointer-events: auto;
  }

  .modal-window>div {
    width: 500px;
    position: relative;
    margin: 10% auto;
    padding: 1rem;
    background: #fff;
    color: #444;
    border-radius: 15px;
    box-shadow:10px 10px 20px grey;
  }
  }

  .modal-window header {
    font-weight: bold;
  }

  .modal-close {
    color: #aaa;
    line-height: 50px;
    font-size: 80%;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
    width: 70px;
    text-decoration: none;
  }

  .modal-close:hover {
    color: #000;
  }

  .modal-window h1 {
    font-size: 150%;
    margin: 0 0 15px;
  }
  .modal-footer{
    padding: 1rem 0rem 0rem;
  }

  div#over_map1 {
    position: absolute;
    z-index: 4;
    right: 0px;
    width: 250px;
  }
  #wrap { position: relative; }
  #over_map { position: absolute; left: 0px; z-index: 6; top: 44px;width: 0px;}

  .icon-bar{
    background-color:#0056b3;
    color: white;
    margin-top: 0px;
    padding: 4px 0px;
    margin-left: 64px;
    border-left: 1px solid white;
  }

  .icon-bar a{
    color: white;
    margin-left: 13px;
    font-size: 15px;
  }

  .icon-bar a:hover{
    color: lightblue;
    text-decoration:none;
  }

  .panel.panel-success.categories {
    width: 290px;
    overflow-y: auto;
    overflow-x: hidden;
    height: 545px;
  }

  .panel.panel-success {
    background-color: #fff;
    float:left;
    overflow-y: auto;
    overflow-x: hidden;
    border: 1px solid #dbdbdb !important;
  }

  .treeview input[type="checkbox"].checker{
    display: none;
  }
  .treeview input[type="radio"].checker {
    display: none;
  }

  .treeview,
  .treeview ul {
    padding: 0;
    margin: 0;
    margin-bottom: 5px;
    overflow: hidden;
  }

  .treeview li {
    position: relative;
    font-size: 1rem;
    display: flex;
    flex-direction: column;
  }
  .treeview > li {
    padding-left: 0;
  }

  .treeview ul {
    max-height: 0;
    -webkit-transition: 0.8s ease;
    -moz-transition: 0.8s ease;
    -ms-transition: 0.8s ease;
    -o-transition: 0.8s ease;
  }

  .treeview li input:nth-of-type(1):checked ~ ul {
    max-height: 1000px;
  }

  .treeview li label.specific {
    padding: 0px;
    padding-left: 23px;
    /*background-color: #f3f3f4;*/
    cursor: pointer;
    font-size: 13px;
    display: flex;
    align-items: center;
    font-weight: 600;
  }

  .treeview li label.specific i {
    font-size: 13px;
  }

  .treeview li label.specific > span {
    margin: 0 20px;
  }

  .treeview li label.specific input[type="text"] {
    flex: 1;
    color: #676a6c;
    background: white;
    border: none;
    border-radius: 3px;
    transition: 0.2s ease;
    padding: 9px;
    margin-left: 10px;
    background: none;
  }

  .treeview li label.specific input[type="text"]:focus,
  .treeview li label.specific input[type="text"]:hover {
    background: white;
  }

  .treeview li label.specific:not(.child):before {
    transition: 0.3s ease;
    position: absolute;
    margin-left: -11px;
    margin-top: 10px;
  }

  .treeview li label.specific:not(.child):before {
    font: normal normal normal 13px/1 FontAwesome;
    content: "\f054";
  }

  .treeview li input[type="checkbox"]:checked + label.specific:before {
    transform: rotate(90deg);
  }

  .treeview .ball {
    left: 16px;
    margin-left: -60px;
    padding-right: 30px;
  }

  .treeview .ball:before {
    color: #fff;
    position: relative;
    display: flex;
    border-radius: 50%;
    background-color: #0056b3;
    align-items: center;
    height: 23px;
    width: 23px;
    font-size: 13px;
    justify-content: center;
    content: attr(data-id);
  }
  .treeview .action-list {
    margin-left: auto;
  }
  .treeview .action-list i {
    margin-left: 15px;
  }



  .treeview .btn-pos{
    margin: 4px 0px 2px;
  }

  .treeview .desc{
    font-size: 12px;
    padding-left: 25px;
    overflow-y: scroll;
  }

  .control.pull-right{
    margin-left: auto;
  }

  .control{
    padding: 5px 5px 0px 0px;
    float: right;

  }
  .head-panel{
    transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  }


  .categories .list-group-item{
    font-size: 13px;
    border-left: none;
    border-right: none;
    border-radius: 0;
    margin-bottom: -1px;
  }

  .btn-pos-list{
    margin: 5px 0px;
  }

  .form-group .label_summary{
    font-size: 13px;
    font-weight: 600;
    padding: 5px 8px;
  }

  .total .counter-desc{
    margin: auto;
    padding: 0px 8px;
    font-size: 13px;
    text-align: justify;
  }

  .right-content-info .total{
    border-radius: 0px;
    padding: 5px 0px;
    margin: 0px 0px 7px;
  }

  .list-cat-panel {
    /*  overflow-y: auto;
    height: 280px;*/
  }

  .head-panel .control div a{
    color: #0056b3;
  }

  .transform1 img{
    -moz-transition-duration: 0.4s;
    -o-transition-duration: 0.4s;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    display: inline-block;
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
  }

  #close-panel-left img{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    -moz-transition-duration: 0.4s;
    -o-transition-duration: 0.4s;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    display: inline-block;
  }

  #close-panel-right img{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    -moz-transition-duration: 0.4s;
    -o-transition-duration: 0.4s;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    display: inline-block;
  }
  .no-padding{
    padding-left: 0;
    padding-right: 0;
  }

  .right-content-info{
    max-height: 440px;
    overflow-y: auto;
    overflow-x: hidden;
    border-bottom: 1px solid #ddd;
  }

  .treeview .inter-list-panel{
    margin: 5px 5px;
    border-radius: 0px;
  }

  .example .btn-toggle {
    top: 50%;
    transform: translateY(-50%);
  }
  .control .btn-toggle {
    margin: 0 4rem;
    padding: 0;
    position: relative;
    border: none;
    height: 1.5rem;
    width: 3rem;
    border-radius: 1.5rem;
    color: #6b7381;
    background: #bdc1c8;
  }
  .control .btn-toggle:focus,
  .control .btn-toggle.focus,
  .control .btn-toggle:focus.active,
  .control .btn-toggle.focus.active {
    outline: none;
  }
  .control .btn-toggle:before,
  .control .btn-toggle:after {
    line-height: 1.5rem;
    width: 4rem;
    text-align: center;
    font-weight: 600;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: absolute;
    bottom: 0;
    transition: opacity 0.25s;
  }
  .control .btn-toggle:before {
    content: "Off";
    left: -4rem;
  }
  .control .btn-toggle:after {
    content: "On";
    right: -4rem;
    opacity: 0.5;
  }
  .control .btn-toggle > .handle {
    position: absolute;
    top: 0.1875rem;
    left: 0.1875rem;
    width: 1.125rem;
    height: 1.125rem;
    border-radius: 1.125rem;
    background: #fff;
    transition: left 0.25s;
  }
  .control .btn-toggle.active {
    transition: background-color 0.25s;
  }
  .control .btn-toggle.active > .handle {
    left: 1.6875rem;
    transition: left 0.25s;
  }
  .control .btn-toggle.active:before {
    opacity: 0.5;
  }
  .control .btn-toggle.active:after {
    opacity: 1;
  }
  .control .btn-toggle:before,
  .control .btn-toggle:after {
    color: #6b7381;
  }
  .control .btn-toggle.active {
    background-color: #0056b3;
  }
  .control .btn-toggle.btn-xs:before,
  .control .btn-toggle.btn-xs:after {
    display: none;
  }
  .control .btn-toggle.btn-xs {
    margin: 0 0;
    padding: 0;
    position: relative;
    border: none;
    height: 11px;
    width: 1.2rem;
    border-radius: 1rem;
    margin-top: -2px;
  }
  .control .btn-toggle.btn-xs:focus,
  .control .btn-toggle.btn-xs.focus,
  .control .btn-toggle.btn-xs:focus.active,
  .control .btn-toggle.btn-xs.focus.active {
    outline: none;
  }
  .control .btn-toggle.btn-xs:before,
  .control .btn-toggle.btn-xs:after {
    line-height: 1rem;
    width: 0;
    text-align: center;
    font-weight: 600;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: absolute;
    bottom: 0;
    transition: opacity 0.25s;
  }
  .control .btn-toggle.btn-xs:before {
    content: "Off";
    left: 0;
  }
  .control .btn-toggle.btn-xs:after {
    content: "On";
    right: 0;
    opacity: 0.5;
  }
  .control .btn-toggle.btn-xs > .handle {
    position: absolute;
    top: 2px;
    left: 0.125rem;
    width: 8px;
    height: 7px;
    border-radius: 0.75rem;
    background: #fff;
    transition: left 0.25s;
  }
  .control .btn-toggle.btn-xs.active {
    transition: background-color 0.25s;
  }
  .control .btn-toggle.btn-xs.active > .handle {
    left: 10px;
    transition: left 0.25s;
  }
  .control .btn-toggle.btn-xs.active:before {
    opacity: 0.5;
  }
  .control .btn-toggle.btn-xs.active:after {
    opacity: 1;
  }

  .categories .list-group-item i{
    font-size: 16px;
  }

  #table1 .form-group{
    margin-bottom: 5px;
    border-radius: 0;
    /*padding: 0px 10px;*/
  }
  div#map{
    width:100%;
    height:545px;
    z-index:1;
    margin-top: 0px;

  }

  #legend .cate{
    font-size: 13px;
    font-weight: 600;
  }

  .panel-heading .nav-tabs img.test-icon{
    height: 20px;
    margin-top: 6px;
  }

  select#sel1 {
    font-size: 13px;
    border-radius: 0;
    color: #222;
  }

  .total a {
    margin: 8px;
    font-size: 18px;
  }


  /*range slider*/

  .range {
    display: table;
    position: relative;
    height: 25px;
    background-color: inherit;
    border-radius: 0px;
    cursor: pointer;
    border-bottom: 1px dotted #ccc;
    padding: 0px 0 5px;
  }

  .range input[type="range"] {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    display: table-cell;
    width: 60%;
    background-color: transparent;
    height: 25px;
    cursor: pointer;
    padding: 18px 15px 0px 20px;
  }
  .range input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    width: 11px;
    height: 25px;
    color: rgb(255, 255, 255);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0px;
    background-color: rgb(153, 153, 153);
  }

  .range input[type="range"]::-moz-slider-thumb {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    width: 11px;
    height: 25px;
    color: rgb(255, 255, 255);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0px;
    background-color: rgb(153, 153, 153);
  }

  .range output {
    display: table-cell;
    padding: 0px 5px 4px;
    min-width: 30px;
    color: rgb(255, 255, 255);
    background-color: rgb(153, 153, 153);
    text-align: center;
    text-decoration: none;
    border-radius: 0px;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;

    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;

    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: -moz-none;
    -o-user-select: none;
    user-select: none;
  }
  .range input[type="range"] {
    outline: none;
  }

  .range.range-primary input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(66, 139, 202);
  }
  .range.range-primary input[type="range"]::-moz-slider-thumb {
    background-color: rgb(66, 139, 202);
  }
  .range.range-primary output {
    background-color: rgb(0, 86, 179);frange
  }
  .range.range-primary input[type="range"] {
    outline-color: rgb(66, 139, 202);
  }

  .treeview_list{
    display:list-item;
  }
  .treeview-content-p .form-check-input{
    margin-top: 0.2rem;
  }

  #sitemap li a{
    font-size: 13px;
    font-weight: 600;
  }
  ul#sitemap {
    margin-left: 20px;
    background-color: #fff;
    margin-top: 10px;
    overflow: hidden;

  }

  #sitemap input{
    margin-right: 5px;
  }
  div#layers li {
    margin-top: 5px;
  }

  #wrap1 .nav-tabs > li.active > a,  #wrap1 .nav > li > a:hover{
    background-color: #002052;
    opacity: 0.8;
    border: none;
  }

  ul.treeview.checklist {
    background-color: #f3f3f3;
  }
  div#left-panel-toggle {
    background-color: #f3f3f3;
  }
  .indicator{

    position: relative;
    display: inline-block;
    color: #fff;
    height: 5px;
    width: 15px;
    margin-left: 5px;
    border-radius:7px;
    margin-bottom: 1px;
    margin-right: 5px;
  }
  div#table1 {
    background-color: #f3f3f3;
  }
  /*modal box css*/
  .btn-sm {
      border-radius: 4px;
  }
  .modal-footer.modal2{
      padding: 1rem 0rem 0rem;
      padding-bottom: 10px;
      padding-right: 10px;
  }
  .tst {

      line-height: 0px;
  }
  tbody.applied-list {
      font-size: 12px;
  }
  .applie {
      margin-top: 15px;
      margin-left: 420px;
      border-radius: 2px;
          background-color: #002b59;
      color: #fff;
  }
  .panel.panel-default.pane {
      border: 1px solid grey;
      margin-top: 5px;
      padding: 15px;

  }
  label > input{ /* HIDE RADIO */
    visibility: hidden; /* Makes input not-clickable */
    position: absolute; /* Remove input from document flow */
  }
  label > input + .exp{ /* IMAGE STYLES */
    cursor:pointer;
    border:1px solid transparent;
  }
  label > input:checked + .exp{ /* (RADIO CHECKED) IMAGE STYLES */
    width: 80px;
    height: 20px;
    padding: 4px;
  }
  label > input:checked + .ex{ /* (RADIO CHECKED) IMAGE STYLES */

    width: 30px;
    height: 20px;

  }
  .modal-header {
      background-color: #002b59;
      color: #fff
    }
  .express{
    background-color: #fff;
        padding-top: 15px;
      padding-bottom: 0px;
      max-height: 150px;
      overflow-y: auto;
          border: 1px solid #888888;


  }
  .modal-body.mdl2 {
      width: 100%;
      overflow-x: scroll;
      overflow-y: scroll;
    }
  .modal-backdrop.show {
      z-index: 5;
      opacity: .5;
  }

  .overlay {
      left: 21.5%;
      /* height: 500px; */
      width: 200px;
      position: absolute;
      /* right: 0px; */
      z-index: 2000;
      bottom: 0px;
      background-color: white;
      pointer-events: auto;
      padding: 10px;
  }
  /**/
  .modal-content.no2 {
      width: 1050px;
      margin-left: -260px;
  }

  .nav-tabs .nav-link{
  min-height: 68px;
  }

  .nav-fill .nav-item{
  max-width: 33.333%;
  }
  .treeview li.card{
  display: block;
  padding: .5rem;
  }

  .head-panel{
  float: right;
  display: inline-block;
  }

  .treeview li label.specific{
  display: inline-block;
  float: left;
  margin: 0;
  }

  .card:after{
  content: '';
  display: table;
  clear: both;
  }
  #District-popup tr td{
  max-width: 50%;
  min-width: 50%;
  word-break: break-word;
  }

  #District-popup tbody tr th{
  max-width: 150px;
  word-break: break-word;
  }
  .p-header{
  background: #0056b3;
  color: #FFF;
  padding: .5rem 1rem;
  font-size: 17px;
  margin-top: -4px;
  }

  ul.nav.nav-tabs li.basemap a{
  display: inline-block;
  padding: 10px 15px;
  }
  ul.nav-tabs li.basemap.active{
  background: rgba(0,0,0,.3);

  }

  ul.nav.nav-tabs li.basemap a:hover{
  background: rgba(0,0,0,.2);
  color: #FFF;
  }

  ul.nav-tabs li.basemap.active a{
  color: #FFF;
  }


  li.basemap.chevron1 i{
  font-size: 22px;
  color: #FFF;
  }

  li.basemap.chevron1{
  padding: 10px;
  }

  #close-panel-right i{
  font-size: 24px;
  color: #FFF;
  }

  #close-panel-right{
  padding: 10px;
  }

  #close-panel-right:hover, #close-panel-left:hover{
  cursor: pointer;
  }

</style>
<script>
$(document).ready(function(){
  fixMHeight();
      window.onresize = function(event) {
           fixMHeight();
       }

        function fixMHeight() {
            vph = $(window).height();
            headerHeight = $("#website-header").height();
            vph = vph - headerHeight;
            $("#map").height(vph);
          $("#left-panel-toggle").height(vph - 2);
          $("#right-panel-toggle").height(vph - 11);
        }
     });

</script>




<div id="wrap">


  <!-- left pane -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 no-padding col-sm-12">
        <div class="panel-heading">
          <ul class="nav nav-tabs" role="tablist">
            <li class="basemap chevron1" id="close-panel-left">
              <!-- <img src="<?php echo base_url()?>assets/img/up-arrow.png" class="test-icon chevron"> -->
              <i class="la la-bars"></i>
            </li>
            <li role="presentation" class="basemap active"><a href="#" ><span style="font-size: 16px;"><?php echo $site_info['map']?></span></a></li>
            <li role="presentation" class="basemap"><a href="<?php echo base_url('view_table').'?tbl='.$this->body['cat_tbl_data'][0]['category_table']?>" ><span  style="font-size: 16px;"><?php echo $site_info['nav_5']?></span></a></li>
            <li role="presentation" class="basemap"><a href="<?php echo base_url()?>map_download">
              <!-- <img src="<?php echo base_url()?>assets/img/map-down.png" class="test-icon"> -->
              <span  style="font-size: 16px;"><?php echo $site_info['download']?> <?php echo $site_info['map']?></span></a></li>

          </ul>
        </div>
      </div>

      <div class="col-md-6 no-padding col-sm-12" style="background: #0056b3">
        <div class="panel-heading right pull-right">
          <ul class="nav nav-tabs" role="tablist">
            <li class=" basemap chevron2 navbar-right" id="close-panel-right">
              <!-- <img src="<?php echo base_url()?>assets/img/up-arrow.png" class="test-icon chevron"> -->
              <i class="la la-info-circle"></i>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>

  <div class="half col-sm-12 col-md-4 no-padding" id ="over_map">
    <div class="panel panel-success categories" id="left-panel-toggle">
      <div class="panel-body cate">
        <div style="position: relative; z-index: 999;">
          <!-- Tab panes -->
          <ul class="nav nav-tabs nav-fill" id="filterTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link d-flex align-items-center active" id="tab001-tab" data-toggle="tab" href="#tab001" role="tab" aria-controls="tab001" aria-selected="true">
                      <?php echo $site_info['cat_1'] ?>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" id="tab002-tab" data-toggle="tab" href="#tab002" role="tab" aria-controls="tab002" aria-selected="false">
                      <?php echo $site_info['cat_2'] ?>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" id="tab003-tab" data-toggle="tab" href="#tab003" role="tab" aria-controls="tab003" aria-selected="false">
                      <?php echo $site_info['cat_3'] ?>
                    </a>
                  </li>
                </ul>
                <div class="tab-content scrolling-wrap" id="filterTabContent">
                    <div class="tab-pane fade show active" id="tab001" role="tabpanel" aria-labelledby="tab001-tab">
                      <!-- <div class="tab-content cate"> -->
                        <!-- categories -->
                        <div id="categories">
                          <ul class="treeview checklist">


                            <?php  foreach ($data_ex as $data){

                            if($data['public_view']=='0'){


                            }else{ ?>

                              <li class="card inter-list-panel">
                                <div class="head-panel">
                                  <div class="control">
                                    <div class="row">
                                      <!-- <div class="col-md-1 pull-left">
                                      <a href="#"><i class="fa fa-info-circle"></i></a>
                                    </div> -->

                                    <div class="col-md-12">
                                      <!-- <?php if($data['category_type']=='Exposure_Data'){ ?>

                                        <span class="indicator" style="background-color:<?php echo 'green' ?>" data-toggle="tooltip" data-placement="top" title="Exposure Data"></span>


                                      <?php }elseif($data['category_type']=='Baseline_Data'){ ?>

                                        <span class="indicator" style="background-color:<?php echo 'blue' ?>" data-toggle="tooltip" data-placement="top" title="Baseline Data"></span>

                                      <?php }else{ ?>
                                        <span class="indicator" style="background-color:<?php echo 'red' ?>" data-toggle="tooltip" data-placement="top" title="Hazard Data"></span>

                                      <?php } ?> -->
                                      <a data-toggle="modal" href="#<?php echo $data['category_table'];?>_" class = "filterthis" name="<?php echo $data['category_name'];?>" id="<?php echo $data['category_table'];?>">
                                    <img src="<?php echo base_url()?>assets/img/filter.png" class="filter-icon"></a>

                                        <?php	if($data['default_load']=='0'){ ?>
                                          <button type="button" name="<?php echo $data['category_name'];?>" value = "<?php echo $data['category_table'];?>" id = "<?php echo $data['category_table'].'_toggle'?>" class="btn btn-xs btn-toggle  CheckBox" data-toggle="button" aria-pressed="false" autocomplete="off">
                                          <?php	}else{ ?>
                                            <button type="button" name="<?php echo $data['category_name'];?>" value = "<?php echo $data['category_table'];?>" id = "<?php echo $data['category_table'].'_toggle'?>" class="btn btn-xs btn-toggle  active CheckBox" data-toggle="button" aria-pressed="false" autocomplete="off">
                                            <?php	} ?>
                                            <div class="handle"></div>
                                          </button>
                                        </div>
                                      </div>
                                    </div>

                                  </div>


                                  <input type="checkbox" name="<?php echo $data['category_name']?>" class="checker" id="<?php echo $data['category_table']?>">

                                  <label for="<?php echo $data['category_table']?>" id="<?php echo $data['category_table']?>_sub" class="specific">
                                    <!-- <div class="ball" data-id="1"></div> -->
                                    <p><?php echo $data['category_name']; ?></p>
                                    <!-- <div class="action-list">
                                    <i class="fa fa-info-circle"></i>
                                    <i class="fa fa-plus"></i>
                                  </div> -->
                                </label>
                                <div class="clearfix"></div>
                                <ul>
                                  <li>
                                    <div class="desc">
                                      <!-- <div class="range range-primary">
                                      <small>Transparency</small>
                                      <input type="range" name="range" min="1" max="100" value="50" onchange="rangePrimary.value=value">
                                      <output id="rangePrimary">50</output>
                                    </div> -->
                                    <div class="treeview-content-p" id="<?php echo $data['category_table']?>_treeview">

                                      <?php if($data['sub_categories']==''){  ?>

                                        <!-- <p> No sub categories </p> -->

                                      <?php  }else{

                                        $data_array=json_decode($data['sub_categories'],TRUE);

                                        for($i=0;sizeof($data_array)>$i;$i++){

                                          ?>

                                          <div class="form-check">

                                            <input type="checkbox" id="<?php echo $data['sub_col'] ?>" name="<?php echo $data['category_table'] ?>" class="form-check-input sub-cat" value="<?php echo $data_array[$i] ?>"><label class="form-check-label"><?php echo $data_array[$i] ?></label>

                                          </div>

                                        <?php }} ?>
                                      </div>


                                    </div>
                                  </li>
                                </ul>

                              </li>

                              <!-- new moadal -->
                            <div class="container">
                                <div class="modal fade" id="<?php echo $data['category_table']?>_" data-modal-index="999999999999999999">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                     <h4 class="modal-title"><?php echo $data['category_name']?></h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color: #fff">&times;</span><span class="sr-only">Close</span></button>

                                  </div>
                                  <div class="modal-body">
                                       <!-- modal 1 design -->
                                       <div class="row">
                                  <div class="col-md-4">Filter
                                    <div class="col-md-12 express">
                                      <div class="row filter_column_name">


                                      </div>
                                    </div></div>
                                  <div class="col-md-4">Expression<div class="col-md-12 express">
                                    <div class="row">
                                        <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="=" disabled/>
                                <p class="ex text-center"> = </p>
                              </label></div>
                               <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="+" disabled/>
                                <p class="ex text-center"> + </p>
                              </label></div>
                               <!-- <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="-"/>
                                <p class="ex text-center"> - </p>
                              </label></div> -->
                               <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value=">" disabled/>
                                <p class="ex text-center"> > </p>
                              </label></div>
                               <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="<" disabled/>
                                <p class="ex text-center"> < </p>
                              </label></div>
                              <!-- <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="AND"/>
                                <p class="ex text-center"> AND </p>
                              </label></div>
                              <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="OR"/>
                                <p class="ex text-center"> OR </p>
                              </label></div>
                              <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="NOT"/>
                                <p class="ex text-center"> NOT </p>
                              </label></div> -->
                                      </div>
                                  </div></div>
                                  <div class="col-md-4 "> Values<div class="col-md-12 express">
                                    <div class="row filter_values">

                               </div>
                             </div>
                            </div>

                            <div class="container">
                              <div class="text-size">
                                <a href="#"  style="color: grey"> clear</a>
                                <input type="text" name="" class="size-box selected_filter_ex" disabled>
                                <input type="text" name="" class="size-box selected_filter_query" hidden>
                              </div>
                            </div>

                             <button class="btn btn-default btn-sm applie applied_filter" data-toggle="modal" data-target="#<?php echo $data['category_table']?>_mod_dat">Apply</button>
                                </div>
                                       <!--  -->
                                  </div>
                                  <div class=" left-apply">
                                    <div class="container" >
                                  <h6><b>Applied Filters</b></h6>
                                  <!-- applied filters -->
                                 <table class="table">

                              <tbody class="applied-list">
                                <!-- <tr>
                                  <th scope="row">1</th>
                                  <td>Size > 3</td>
                                  <td><i class="fa fa-eye"></i></td>
                                  <td><i class="fa fa-minus"></i></td>
                                </tr> -->

                              </tbody>
                            </table>
                                  <!--  -->
                                  </div>

                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->


                                <div class="modal fade" id="<?php echo $data['category_table']?>_mod_dat" data-modal-index="2">
                              <div class="modal-dialog">
                                <div class="modal-content no2">
                                  <div class="modal-header">
                                    <h4 class="modal-title"><?php echo $data['category_name']?></h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color: #fff">&times;</span><span class="sr-only">Close</span></button>

                                  </div>
                                  <div class="modal-body mdl2" >
                                    <h4 id='filter_tbl_name'></h4>
                                    <table class="table table-striped" id="table_filter">
                              <thead>
                                <tr>

                                </tr>
                              </thead>
                              <tbody>


                              </tbody>
                            </table>
                            <div id="applied_filter_content">
                            </div>
                            <!--         <button class="btn btn-default" data-toggle="modal" data-target="#test-modal-3">Launch Modal 3</button>
                             -->      </div>

                                  <div class="modal-footer modal2" >
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>


                                    <a href="abc" id="filter_download"> <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-download" style="background-color: #002b59"></i> Download</button></a>
                                   <!-- <a href=""> <button type="button" class="btn btn-info btn-sm"> <i class="fa fa-eye"></i> Map</button></a> -->
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                                <div class="modal fade" id="test-modal-3">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title">Modal title 3</h4>
                                  </div>
                                  <div class="modal-body">


                                    <!-- <button class="btn btn-default" data-toggle="modal" data-target="#test-modal-4">Launch Modal 4</button> -->
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Download</button>
                                    <button type="button" class="btn btn-primary btn-sm">Map</button>
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->


                                <div class="modal fade" id="test-modal-4">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title">Modal title 4</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>One fine body&hellip;</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            </div>
                            <!-- new moadal -->

                          <?php }}?>

                          </ul>


                        </div>


                        <!-- filter -->
                        <!-- <div role="tabpanel" class="tab-pane" id="filter">
                          <div class="form-group">
                            <label for="usr"></label>
                            <input type="text" class="form-control" id="usr"  placeholder="Enter text eg. Text">
                          </div>
                          <div class="form-group">
                            <label for="sel1">Select list:</label>
                            <select class="form-control " id="sel1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="sel1">Select list:</label>
                            <select class="form-control" id="sel1" >
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>

                          <button type="button" class="btn btn-default btn-sm"> Filter</button>

                        </div> -->

                        <!-- legend -->
                        <!-- <div role="tabpanel" class="tab-pane" id="legend">
                          <ul class="list-group cate">
                            <li class="list-group-item"><i class="fa fa-square" style='color:#8DD3C7;'></i> Roads</li>
                            <li class="list-group-item"><i class="fa fa-square" style='color:#FFFFB3;'></i> Rivers</li>
                            <li class="list-group-item"><i class="fa fa-square" style='color:#BEBADA;'></i> Mountain</li>
                            <li class="list-group-item"><i class="fa fa-square" style='color:#FB8072;'></i> Forest</li>
                            <li class="list-group-item"><i class="fa fa-square" style='color:#80B1D3;'></i> Lake</li>
                          </ul>
                        </div> -->
                        <!-- legend -->

                        <!-- categories -->

                      <!-- </div> -->
                    </div>
                    <div class="tab-pane  fade" id="tab002" role="tabpanel" aria-labelledby="tab002-tab">
                      <!-- <div class="tab-content cate"> -->
                        <!-- categories -->
                        <div id="categories">
                          <ul class="treeview checklist">


                            <?php  foreach ($data_haza as $data){

                            if($data['public_view']=='0'){


                            }else{ ?>

                              <li class="card inter-list-panel">
                                <div class="head-panel">
                                  <div class="control">
                                    <div class="row">
                                      <!-- <div class="col-md-1 pull-left">
                                      <a href="#"><i class="fa fa-info-circle"></i></a>
                                    </div> -->

                                    <div class="col-md-12">
                                      <!-- <?php if($data['category_type']=='Exposure_Data'){ ?>

                                        <span class="indicator" style="background-color:<?php echo 'green' ?>" data-toggle="tooltip" data-placement="top" title="Exposure Data"></span>


                                      <?php }elseif($data['category_type']=='Baseline_Data'){ ?>

                                        <span class="indicator" style="background-color:<?php echo 'blue' ?>" data-toggle="tooltip" data-placement="top" title="Baseline Data"></span>

                                      <?php }else{ ?>
                                        <span class="indicator" style="background-color:<?php echo 'red' ?>" data-toggle="tooltip" data-placement="top" title="Hazard Data"></span>

                                      <?php } ?> -->
                                      <a data-toggle="modal" href="#<?php echo $data['category_table'];?>_" class = "filterthis" name="<?php echo $data['category_name'];?>" id="<?php echo $data['category_table'];?>">
                                    <img src="<?php echo base_url()?>assets/img/filter.png" class="filter-icon"></a>

                                        <?php	if($data['default_load']=='0'){ ?>
                                          <button type="button" name="<?php echo $data['category_name'];?>" value = "<?php echo $data['category_table'];?>" id = "<?php echo $data['category_table'].'_toggle'?>" class="btn btn-xs btn-toggle  CheckBox" data-toggle="button" aria-pressed="false" autocomplete="off">
                                          <?php	}else{ ?>
                                            <button type="button" name="<?php echo $data['category_name'];?>" value = "<?php echo $data['category_table'];?>" id = "<?php echo $data['category_table'].'_toggle'?>" class="btn btn-xs btn-toggle  active CheckBox" data-toggle="button" aria-pressed="false" autocomplete="off">
                                            <?php	} ?>
                                            <div class="handle"></div>
                                          </button>
                                        </div>
                                      </div>
                                    </div>

                                  </div>


                                  <input type="checkbox" name="<?php echo $data['category_name']?>" class="checker" id="<?php echo $data['category_table']?>">

                                  <label for="<?php echo $data['category_table']?>" id="<?php echo $data['category_table']?>_sub"   class="specific">
                                    <!-- <div class="ballassss" data-id="1"></div> -->
                                    <p><?php echo $data['category_name']; ?></p>
                                    <!-- <div class="action-list">
                                    <i class="fa fa-info-circle"></i>
                                    <i class="fa fa-plus"></i>
                                  </div> -->
                                </label>
                                <div class="clearfix"></div>
                                <ul>
                                  <li>
                                    <div class="desc">
                                      <!-- <div class="range range-primary">
                                      <small>Transparency</small>
                                      <input type="range" name="range" min="1" max="100" value="50" onchange="rangePrimary.value=value">
                                      <output id="rangePrimary">50</output>
                                    </div> -->
                                    <div class="treeview-content-p" id="<?php echo $data['category_table']?>_treeview">

                                      <?php if($data['sub_categories']==''){  ?>

                                        <!-- <p> No sub categories </p> -->

                                      <?php  }else{

                                        $data_array=json_decode($data['sub_categories'],TRUE);

                                        for($i=0;sizeof($data_array)>$i;$i++){

                                          ?>

                                          <div class="form-check">

                                            <input type="checkbox" id="<?php echo $data['sub_col'] ?>" name="<?php echo $data['category_table'] ?>" class="form-check-input sub-cat" value="<?php echo $data_array[$i] ?>"><label class="form-check-label"><?php echo $data_array[$i] ?></label>

                                          </div>

                                        <?php }} ?>
                                      </div>


                                    </div>
                                  </li>
                                </ul>

                              </li>

                              <!-- new moadal -->
                            <div class="container">
                                <div class="modal fade" id="<?php echo $data['category_table']?>_" data-modal-index="999999999999999999">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                     <h4 class="modal-title"><?php echo $data['category_name']?></h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color: #fff">&times;</span><span class="sr-only">Close</span></button>

                                  </div>
                                  <div class="modal-body">
                                       <!-- modal 1 design -->
                                       <div class="row">
                                  <div class="col-md-4">Filter
                                    <div class="col-md-12 express">
                                      <div class="row filter_column_name">


                                      </div>
                                    </div></div>
                                  <div class="col-md-4">Expression<div class="col-md-12 express">
                                    <div class="row">
                                        <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="=" disabled/>
                                <p class="ex text-center"> = </p>
                              </label></div>
                               <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="+" disabled/>
                                <p class="ex text-center"> + </p>
                              </label></div>
                               <!-- <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="-"/>
                                <p class="ex text-center"> - </p>
                              </label></div> -->
                               <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value=">" disabled/>
                                <p class="ex text-center"> > </p>
                              </label></div>
                               <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="<" disabled/>
                                <p class="ex text-center"> < </p>
                              </label></div>
                              <!-- <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="AND"/>
                                <p class="ex text-center"> AND </p>
                              </label></div>
                              <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="OR"/>
                                <p class="ex text-center"> OR </p>
                              </label></div>
                              <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="NOT"/>
                                <p class="ex text-center"> NOT </p>
                              </label></div> -->
                                      </div>
                                  </div></div>
                                  <div class="col-md-4 "> Values<div class="col-md-12 express">
                                    <div class="row filter_values">

                               </div>
                             </div>
                            </div>

                            <div class="container">
                              <div class="text-size">
                                <a href="#"  style="color: grey"> clear</a>
                                <input type="text" name="" class="size-box selected_filter_ex" disabled>
                                <input type="text" name="" class="size-box selected_filter_query" hidden>
                              </div>
                            </div>

                             <button class="btn btn-default btn-sm applie applied_filter" data-toggle="modal" data-target="#<?php echo $data['category_table']?>_mod_dat">Apply</button>
                                </div>
                                       <!--  -->
                                  </div>
                                  <div class=" left-apply">
                                    <div class="container" >
                                  <h6><b>Applied Filters</b></h6>
                                  <!-- applied filters -->
                                 <table class="table">

                              <tbody class="applied-list">
                                <!-- <tr>
                                  <th scope="row">1</th>
                                  <td>Size > 3</td>
                                  <td><i class="fa fa-eye"></i></td>
                                  <td><i class="fa fa-minus"></i></td>
                                </tr> -->

                              </tbody>
                            </table>
                                  <!--  -->
                                  </div>

                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->


                                <div class="modal fade" id="<?php echo $data['category_table']?>_mod_dat" data-modal-index="2">
                              <div class="modal-dialog">
                                <div class="modal-content no2">
                                  <div class="modal-header">
                                    <h4 class="modal-title"><?php echo $data['category_name']?></h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color: #fff">&times;</span><span class="sr-only">Close</span></button>

                                  </div>
                                  <div class="modal-body mdl2" >
                                    <h4 id='filter_tbl_name'></h4>
                                    <table class="table table-striped" id="table_filter">
                              <thead>
                                <tr>

                                </tr>
                              </thead>
                              <tbody>


                              </tbody>
                            </table>
                            <div id="applied_filter_content">
                            </div>
                            <!--         <button class="btn btn-default" data-toggle="modal" data-target="#test-modal-3">Launch Modal 3</button>
                             -->      </div>

                                  <div class="modal-footer modal2" >
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>


                                    <a href="abc" id="filter_download"> <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-download" style="background-color: #002b59"></i> Download</button></a>
                                   <!-- <a href=""> <button type="button" class="btn btn-info btn-sm"> <i class="fa fa-eye"></i> Map</button></a> -->
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                                <div class="modal fade" id="test-modal-3">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title">Modal title 3</h4>
                                  </div>
                                  <div class="modal-body">


                                    <!-- <button class="btn btn-default" data-toggle="modal" data-target="#test-modal-4">Launch Modal 4</button> -->
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Download</button>
                                    <button type="button" class="btn btn-primary btn-sm">Map</button>
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->


                                <div class="modal fade" id="test-modal-4">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title">Modal title 4</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>One fine body&hellip;</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            </div>
                            <!-- new moadal -->

                          <?php }}?>

                          </ul>


                        </div>


                        <!-- filter -->
                        <!-- <div role="tabpanel" class="tab-pane" id="filter">
                          <div class="form-group">
                            <label for="usr"></label>
                            <input type="text" class="form-control" id="usr"  placeholder="Enter text eg. Text">
                          </div>
                          <div class="form-group">
                            <label for="sel1">Select list:</label>
                            <select class="form-control " id="sel1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="sel1">Select list:</label>
                            <select class="form-control" id="sel1" >
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>

                          <button type="button" class="btn btn-default btn-sm"> Filter</button>

                        </div> -->

                        <!-- legend -->
                        <!-- <div role="tabpanel" class="tab-pane" id="legend">
                          <ul class="list-group cate">
                            <li class="list-group-item"><i class="fa fa-square" style='color:#8DD3C7;'></i> Roads</li>
                            <li class="list-group-item"><i class="fa fa-square" style='color:#FFFFB3;'></i> Rivers</li>
                            <li class="list-group-item"><i class="fa fa-square" style='color:#BEBADA;'></i> Mountain</li>
                            <li class="list-group-item"><i class="fa fa-square" style='color:#FB8072;'></i> Forest</li>
                            <li class="list-group-item"><i class="fa fa-square" style='color:#80B1D3;'></i> Lake</li>
                          </ul>
                        </div> -->
                        <!-- legend -->

                        <!-- categories -->

                      <!-- </div> -->


                    </div>
                    <div class="tab-pane fade" id="tab003" role="tabpanel" aria-labelledby="tab003-tab">

                      <!-- <div class="tab-content cate"> -->
                        <!-- categories -->
                        <div id="categories">
                          <ul class="treeview checklist">


                            <?php  foreach ($data_base as $data){

                            if($data['public_view']=='0'){


                            }else{ ?>

                              <li class="card inter-list-panel">
                                <div class="head-panel">
                                  <div class="control">
                                    <div class="row">
                                      <!-- <div class="col-md-1 pull-left">
                                      <a href="#"><i class="fa fa-info-circle"></i></a>
                                    </div> -->

                                    <div class="col-md-12">
                                      <!-- <?php if($data['category_type']=='Exposure_Data'){ ?>

                                        <span class="indicator" style="background-color:<?php echo 'green' ?>" data-toggle="tooltip" data-placement="top" title="Exposure Data"></span>


                                      <?php }elseif($data['category_type']=='Baseline_Data'){ ?>

                                        <span class="indicator" style="background-color:<?php echo 'blue' ?>" data-toggle="tooltip" data-placement="top" title="Baseline Data"></span>

                                      <?php }else{ ?>
                                        <span class="indicator" style="background-color:<?php echo 'red' ?>" data-toggle="tooltip" data-placement="top" title="Hazard Data"></span>

                                      <?php } ?> -->
                                      <a data-toggle="modal" href="#<?php echo $data['category_table'];?>_" class = "filterthis" name="<?php echo $data['category_name'];?>" id="<?php echo $data['category_table'];?>">
                                    <img src="<?php echo base_url()?>assets/img/filter.png" class="filter-icon"></a>

                                        <?php	if($data['default_load']=='0'){ ?>
                                          <button type="button" name="<?php echo $data['category_name'];?>" value = "<?php echo $data['category_table'];?>" id = "<?php echo $data['category_table'].'_toggle'?>" class="btn btn-xs btn-toggle  CheckBox" data-toggle="button" aria-pressed="false" autocomplete="off">
                                          <?php	}else{ ?>
                                            <button type="button" name="<?php echo $data['category_name'];?>" value = "<?php echo $data['category_table'];?>" id = "<?php echo $data['category_table'].'_toggle'?>" class="btn btn-xs btn-toggle  active CheckBox" data-toggle="button" aria-pressed="false" autocomplete="off">
                                            <?php	} ?>
                                            <div class="handle"></div>
                                          </button>
                                        </div>
                                      </div>
                                    </div>

                                  </div>


                                  <input type="checkbox" name="<?php echo $data['category_name']?>" class="checker" id="<?php echo $data['category_table']?>">

                                  <label for="<?php echo $data['category_table']?>" id="<?php echo $data['category_table']?>_sub" class="specific">
                                    <!-- <div class="ball" data-id="1"></div> -->
                                    <p><?php echo $data['category_name']; ?></p>
                                    <!-- <div class="action-list">
                                    <i class="fa fa-info-circle"></i>
                                    <i class="fa fa-plus"></i>
                                  </div> -->
                                </label>
                                <div class="clearfix"></div>
                                <ul>
                                  <li>
                                    <div class="desc">
                                      <!-- <div class="range range-primary">
                                      <small>Transparency</small>
                                      <input type="range" name="range" min="1" max="100" value="50" onchange="rangePrimary.value=value">
                                      <output id="rangePrimary">50</output>
                                    </div> -->
                                    <div class="treeview-content-p" id="<?php echo $data['category_table']?>_treeview">

                                      <?php if($data['sub_categories']==''){  ?>

                                        <!-- <p> No sub categories </p> -->

                                      <?php  }else{

                                        $data_array=json_decode($data['sub_categories'],TRUE);

                                        for($i=0;sizeof($data_array)>$i;$i++){

                                          ?>

                                          <div class="form-check">

                                            <input type="checkbox" id="<?php echo $data['sub_col'] ?>" name="<?php echo $data['category_table'] ?>" class="form-check-input sub-cat" value="<?php echo $data_array[$i] ?>"><label class="form-check-label"><?php echo $data_array[$i] ?></label>

                                          </div>

                                        <?php }} ?>
                                      </div>


                                    </div>
                                  </li>
                                </ul>

                              </li>

                              <!-- new moadal -->
                            <div class="container">
                                <div class="modal fade" id="<?php echo $data['category_table']?>_" data-modal-index="999999999999999999">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                     <h4 class="modal-title"><?php echo $data['category_name']?></h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color: #fff">&times;</span><span class="sr-only">Close</span></button>

                                  </div>
                                  <div class="modal-body">
                                       <!-- modal 1 design -->
                                       <div class="row">
                                  <div class="col-md-4">Filter
                                    <div class="col-md-12 express">
                                      <div class="row filter_column_name">


                                      </div>
                                    </div></div>
                                  <div class="col-md-4">Expression<div class="col-md-12 express">
                                    <div class="row">
                                        <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="=" disabled/>
                                <p class="ex text-center"> = </p>
                              </label></div>
                               <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="+" disabled/>
                                <p class="ex text-center"> + </p>
                              </label></div>
                               <!-- <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="-"/>
                                <p class="ex text-center"> - </p>
                              </label></div> -->
                               <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value=">" disabled/>
                                <p class="ex text-center"> > </p>
                              </label></div>
                               <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="<" disabled/>
                                <p class="ex text-center"> < </p>
                              </label></div>
                              <!-- <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="AND"/>
                                <p class="ex text-center"> AND </p>
                              </label></div>
                              <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="OR"/>
                                <p class="ex text-center"> OR </p>
                              </label></div>
                              <div class="col-md-6"><label>
                                <input type="radio" name="fb" class="ex_map" value="NOT"/>
                                <p class="ex text-center"> NOT </p>
                              </label></div> -->
                                      </div>
                                  </div></div>
                                  <div class="col-md-4 "> Values<div class="col-md-12 express">
                                    <div class="row filter_values">

                               </div>
                             </div>
                            </div>

                            <div class="container">
                              <div class="text-size">
                                <a href="#"  style="color: grey"> clear</a>
                                <input type="text" name="" class="size-box selected_filter_ex" disabled>
                                <input type="text" name="" class="size-box selected_filter_query" hidden>
                              </div>
                            </div>

                             <button class="btn btn-default btn-sm applie applied_filter" data-toggle="modal" data-target="#<?php echo $data['category_table']?>_mod_dat">Apply</button>
                                </div>
                                       <!--  -->
                                  </div>
                                  <div class=" left-apply">
                                    <div class="container" >
                                  <h6><b>Applied Filters</b></h6>
                                  <!-- applied filters -->
                                 <table class="table">

                              <tbody class="applied-list">
                                <!-- <tr>
                                  <th scope="row">1</th>
                                  <td>Size > 3</td>
                                  <td><i class="fa fa-eye"></i></td>
                                  <td><i class="fa fa-minus"></i></td>
                                </tr> -->

                              </tbody>
                            </table>
                                  <!--  -->
                                  </div>

                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->


                                <div class="modal fade" id="<?php echo $data['category_table']?>_mod_dat" data-modal-index="2">
                              <div class="modal-dialog">
                                <div class="modal-content no2">
                                  <div class="modal-header">
                                    <h4 class="modal-title"><?php echo $data['category_name']?></h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color: #fff">&times;</span><span class="sr-only">Close</span></button>

                                  </div>
                                  <div class="modal-body mdl2" >
                                    <h4 id='filter_tbl_name'></h4>
                                    <table class="table table-striped" id="table_filter">
                              <thead>
                                <tr>

                                </tr>
                              </thead>
                              <tbody>


                              </tbody>
                            </table>
                            <div id="applied_filter_content">
                            </div>
                            <!--         <button class="btn btn-default" data-toggle="modal" data-target="#test-modal-3">Launch Modal 3</button>
                             -->      </div>

                                  <div class="modal-footer modal2" >
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>


                                    <a href="abc" id="filter_download"> <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-download" style="background-color: #002b59"></i> Download</button></a>
                                   <!-- <a href=""> <button type="button" class="btn btn-info btn-sm"> <i class="fa fa-eye"></i> Map</button></a> -->
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                                <div class="modal fade" id="test-modal-3">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title">Modal title 3</h4>
                                  </div>
                                  <div class="modal-body">


                                    <!-- <button class="btn btn-default" data-toggle="modal" data-target="#test-modal-4">Launch Modal 4</button> -->
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Download</button>
                                    <button type="button" class="btn btn-primary btn-sm">Map</button>
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->


                                <div class="modal fade" id="test-modal-4">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title">Modal title 4</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>One fine body&hellip;</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            </div>
                            <!-- new moadal -->

                          <?php }}?>

                          </ul>


                        <!-- </div> -->
                        </div>


                        <!-- filter -->
                        <!-- <div role="tabpanel" class="tab-pane" id="filter">
                          <div class="form-group">
                            <label for="usr"></label>
                            <input type="text" class="form-control" id="usr"  placeholder="Enter text eg. Text">
                          </div>
                          <div class="form-group">
                            <label for="sel1">Select list:</label>
                            <select class="form-control " id="sel1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="sel1">Select list:</label>
                            <select class="form-control" id="sel1" >
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>

                          <button type="button" class="btn btn-default btn-sm"> Filter</button>

                        </div> -->

                        <!-- legend -->
                        <!-- <div role="tabpanel" class="tab-pane" id="legend">
                          <ul class="list-group cate">
                            <li class="list-group-item"><i class="fa fa-square" style='color:#8DD3C7;'></i> Roads</li>
                            <li class="list-group-item"><i class="fa fa-square" style='color:#FFFFB3;'></i> Rivers</li>
                            <li class="list-group-item"><i class="fa fa-square" style='color:#BEBADA;'></i> Mountain</li>
                            <li class="list-group-item"><i class="fa fa-square" style='color:#FB8072;'></i> Forest</li>
                            <li class="list-group-item"><i class="fa fa-square" style='color:#80B1D3;'></i> Lake</li>
                          </ul>
                        </div> -->
                        <!-- legend -->

                        <!-- categories -->

                      </div>


                    </div>
                </div>



        </div>
      </div>
    </div>
  </div>



  <div id="over_map1" class="col-sm-12 col-md-4 no-padding">

    <div class="panel panel-info col-sm-12 no-padding" id="right-panel-toggle" style="overflow-y:auto;">
      <div id="summary_container" class="panel-body">

        <!-- Tab panes -->
        <div class="tab-content right">
          <!-- categories -->
          <div role="tabpanel" class="tab-pane active" id="table1">
            <div class="form-group">
              <!-- <label for="sel1" class="label_summary">Select layer:</label> -->
              <select class="form-control custom-select drop" id="active_layers">

              </select>
            </div>

            <div class="right-content-info">
              <div class="card total">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="counter_cat">
                      <a>

                        <span class="counti text-center " id="count_summary"></span><span class="ic"></span>
                      </a>
                    </div>
                    <div class="counter-desc">
                      <!-- <p id="cont_text_p"></p> -->
                      </div>
                    </div>

                  </div>
                </div>

                <div class="list-cat-panel">
                  <ul id="ListGroup" class="list-group cate categories">

                  </ul>
                </div>
              </div>

              <div class="btn-pos-list text-center">
                <a href="#" id="viewall" class="btn btn-primary btn-sm">View all</a>
              </div>

            </div>
            <!-- categories -->

            <!-- layer -->
            <div role="tabpanel" class="tab-pane" id="popups"></div>
            <!-- layer -->

            <!-- filter -->

            <!-- categories -->
          </div>
        </div>
        <div id="popup_container" class="panel-body" style="display:hidden" >

        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4 no-padding">
        <div id="open-modal" class="modal-window" role="dialog">
          <div class="box1" style="border-radius: 0;">
            <div class="modal-header">
              <a href="#modal-close" title="Close" class="modal-close"><i class="fa fa-times exit fa-2x"></i></a>
              <h6>Filter Education Institution</h6>
            </div>

            <div class="modal-body">
              <div class="row">

                <div class="col-6">
                  <div class="form-group">
                    <select id="select1" class="custom-select
                    ">
                    <option value="1">Cheese</option>
                    <option value="2">Tomatoes</option>
                    <option value="3">Mozzarella</option>
                    <option value="4">Mushrooms</option>
                    <option value="5">Pepperoni</option>
                    <option value="6">Onions</option>
                  </select>

                </div>
              </div>

              <div class="col-6">
                <div class="form-group">

                  <select id="select2" class="custom-select">
                    <option value="111">Select Data</option>
                    <option value="222">Risk and Hazards</option>
                    <option value="333">Household</option>
                    <option value="444">Schools</option>
                    <option value="555">Health Facilities</option>
                    <option value="666">Government Offices</option>
                    <option value="777">Open Spaces</option>
                  </select>

                </div>
              </div>

            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-sm" id="appl"><i class="fa fa-filter"></i> apply</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="map" class="col-sm-12 no-padding">

  <!-- sub-data pop -->
  <div id="dialog_sub_cat" class="overlay" style="display:none" title="Data Number!" ></div>
  <!-- sub-data pop -->

</div>



<!-- scripts for leaflet map -->
<script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});


var default_loadd = '<?php echo $default_load; ?>';

//
var cat_layer = '<?php echo addslashes($cat_map_layer); ?>';
var cat_tbl_array = '<?php echo $category_tbl; ?>';
var cat_names = '<?php echo $category_names; ?>';
var map_lat='<?php echo $map_zoom_center['map_lat']; ?>'
var map_long='<?php echo $map_zoom_center['map_long']; ?>'
var map_zoom='<?php echo $map_zoom_center['map_zoom']; ?>'

//
//console.log(cat_layer);




// layer_name = JSON.parse(layer_array);
// geojson = JSON.parse(geo_array);
default_load = JSON.parse(default_loadd);
//console.log(default_load);

cat_layer_data = JSON.parse(cat_layer);
cat_tbl_array_name = JSON.parse(cat_tbl_array);
cat_array_name = JSON.parse(cat_names);


var selected_category='<?php echo trim($_GET['tbl']," ") ?>';

// var selected_category_name = "0";
// console.log(selected_category);


  selected_category_name='<?php

if($_GET['tbl']=='0'){
echo 'NO data Selected';
}else{
  echo trim($_GET['name']," ");
}
?>';


//console.log(selected_category_name);

// if(selected_category.length > 1){
// console.log('adasdad');
// }else{
//   var selected_category_name=name_map_cat;
// console.log('notag');
//
// }

//clicked category_map
$('#'+selected_category).prop('checked',true);
$('#'+selected_category+'_toggle').addClass('active');

/*-- LayerJS--*/
$(document).ready(function(){
  $(".layer-toggle").click(function(){
    $(".panel.panel-success").toggle(800);
    $(".layer-toggle i").toggleClass("fa-chevron-right");
  });

  //map part

  var map = L.map('map').setView([map_lat,map_long], map_zoom);
  map.attributionControl.addAttribution("<a href='http://www.naxa.com.np' title = 'Contributor'>NAXA</a>");
  // map.scrollWheelZoom.disable();
  map.options.maxBounds;  // remove the maxBounds object from the map options
  //map.options.minZoom = 9;

  //map.options.minZoom = 14;
  //console.log("adfasfsadfasfasdfasfdasdfsafasdfsafasfasfsafsa");
  var osm = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
  });

  googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
  });
  googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
  });
  googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
  });
  googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
  });
  //var none = "";
  var baseLayers = {
    "OpenStreetMap": osm,
    "Google Streets": googleStreets,
    "Google Hybrid": googleHybrid,
    "Google Satellite": googleSat,
    "Google Terrain": googleTerrain//,
    //"None": none
  };

  map.addLayer(osm);
  layerswitcher = L.control.layers(baseLayers, {}, {collapsed: true}).addTo(map);

  function underscoreToSpace(naaaaame) {

    var underscored = naaaaame;

    var spaced = underscored.replace(/_/g, " ");

    return spaced;

  }


  styles=JSON.parse('<?php echo $style ?>');
  marker_types=JSON.parse('<?php echo $marker_type ?>');

  //popup CheckBoxStart
  popup_content_parsed = JSON.parse('<?php echo $popup_content ?>');

  //popup end
  //selected cat empty
  if(selected_category==""){}else{
    $('#active_layers').append('<option id = '+selected_category+' >'+selected_category_name+'</option>');
  }
  //cat map load
  for(i=0; i<cat_tbl_array_name.length; i++){
    //style start
    var style=JSON.parse(styles[i]);
    var marker_type=marker_types[i];
    //console.log(marker_type);
    //style end


//mapon click
// map.on('click',function(){
// $("#summary_container").css('display','block');
// $("#popup_container").css('display','none');
//
// });

//map end

    //console.log(cat_tbl_array_name[i]);
    window[''+cat_tbl_array_name[i]]= new L.GeoJSON(cat_layer_data[i],
      {
        pointToLayer: function(feature,Latlng)
        {

          if(marker_type=='icon'){

          //  console.log(style.icon);

            icons=L.icon({
              iconSize: [21, 27],
              iconAnchor: [13, 27],
              popupAnchor:  [2, -24],

              iconUrl:style.icon
            });
            var marker = L.marker(Latlng,{icon:icons});


          }else{



            icons=L.icon({
              iconUrl: "https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png"
            });
            var marker = L.circleMarker(Latlng);
            //for(data in style){

          }



          //	}

          return marker;

        },




        onEachFeature: function(feature,layer){
//console.log(popup_content_parsed[i]);
if(popup_content_parsed[i]==0){

}else{
          //console.log(feature);
          if(marker_type !='icon'){
            layer.setStyle(style);
          }


          var popUpContent = "<div class='p-header'>"+cat_array_name[i]+"</div>";

          popUpContent += '<table id="District-popup" class="table table-striped table-hover">';

          //for (data in popup_content_parsed) {
          pop = JSON.parse(popup_content_parsed[i]);

          for(data in pop.a){
            //console.log(data);
            pop1 = pop.a[data].col;
            name = pop.a[data].name;
            popUpContent += "<tr>" + "<th><strong>"+name+"</strong></th>" + "<td>" +  feature.properties[pop1]  + "</td></tr>";

            if(name == 'name' || name=='Name'){

            layer.bindPopup(feature.properties[pop1]);

            }
          }



          // console.log('feature ', feature);

          //dataspaced = underscoreToSpace(data);
          //console.log(JSON.parse(popup_content_parsed[data]));


          //}

          popUpContent += '</table>';



          // var popup_div = L.popup({
          //
          //   closeOnClick: true,
          //
          //   closeButton: true,
          //
          //   keepInView: true,
          //
          //   autoPan: true,
          //
          //   maxHeight: 200,
          //
          //   minWidth: 250
          //
          // }).setContent(popUpContent);

        //feature.popup_div = popUpContent;


          layer.on('click',function(){
            console.log(popUpContent);
            $("#summary_container").css('display','none');
            $("#popup_container").css('display','block');
            $("#popup_container").html(popUpContent);

          });


}

},



      });
 //console.log(feature.popup_div);

      // var popup_div = L.popup({
      //
      //   closeOnClick: true,
      //
      //   closeButton: true,
      //
      //   keepInView: true,
      //
      //   autoPan: true,
      //
      //   maxHeight: 200,
      //
      //   minWidth: 250
      //
      // }).setContent(popUpContent);

      //add layer if the admin has set the layer to load by default on page load
      if($('#'+cat_tbl_array_name[i]+'_toggle').hasClass('active')){
        //console.log(cat_tbl_array_name[i]);
        window[''+cat_tbl_array_name[i]].addTo(map);

        //$('#active_layers').append('<option>Select layer</option>');

        var table_name=cat_array_name[i];
        if(cat_tbl_array_name[i]==selected_category){

        }else{

          $('#active_layers').append('<option id= '+cat_tbl_array_name[i]+' >'+table_name+'</option>');
        }



      }

    }
    //cat map end




    function toTitleCase(str) {
      return str.replace(/\w\S*/g, function(txt){
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
      });
    }






    //    L.Mask = L.Polygon.extend({
    //     options: {
    //      stroke: false,
    //      color: '#0056b3',
    //      fillOpacity: 0.5,
    //      clickable: true,
    //
    //      outerBounds: new L.LatLngBounds([-90, -360], [90, 360])
    //    },
    //
    //    initialize: function (latLngs, options) {
    //
    //     var outerBoundsLatLngs = [
    //     this.options.outerBounds.getSouthWest(),
    //     this.options.outerBounds.getNorthWest(),
    //     this.options.outerBounds.getNorthEast(),
    //     this.options.outerBounds.getSouthEast()
    //     ];
    //     L.Polygon.prototype.initialize.call(this, [outerBoundsLatLngs, latLngs], options);
    //   },
    //
    // });
    //    L.mask = function (latLngs, options) {
    //     return new L.Mask(latLngs, options);
    //   };
    //
    //
    //   var coordinates = changu1[0].features[0].geometry.coordinates[0];
    //
    //   var latLngs = [];
    //   for (i=0; i<coordinates.length; i++) {
    //     for(j=0; j<coordinates[i].length;j++){
    // 					// console.log(coordinates[i][j]);
    // 					latLngs.push(new L.LatLng(coordinates[i][j][1], coordinates[i][j][0]));
    // 				}
    // 			}
    //
    //
    // 			L.mask(latLngs).addTo(map);
    //     $("path.leaflet-interactive").css({"fill":"#f3f3f3","stroke":"#759dc3","stroke-width":"2px","fillOpacity":"1"});



    function Loadlist(selected_list_id,selected_category_name){

      if(selected_list_id==""){
      selected_list_id='<?php echo $default_selected_cat_tbl ?>';
      selected_category_name='<?php echo $default_selected_cat_name ?>'
      }

      $.ajax({
        type: "GET",
        //  data: name,
        url:  "MapController/get_summary_list?selected_list_id="+selected_list_id,
        beforeSend: function() {
          $("#ListGroup").html('');
          $(".counter-desc").html('');
          $("#count_summary").html('');
          $(".ic").html('');
        //  $("#ListGroup").html('Loading');

        },
        complete: function() {

        },
        success: function (result) {
        $(".ic").html('');
          //	console.log(result);
          $("#ListGroup").html('');
          var result_parsed = JSON.parse(result);
          //
          //console.log(result_parsed['rowcount']);
          //	console.log(result);
          // selected_list_id1=	selected_category_name.replace('_',' ');
          // selected_list_id2=toTitleCase(selected_list_id1);
          $("#count_summary").html("<b>"+result_parsed['rowcount']+"</b>");
          $(".ic").html(" <b>"+selected_category_name+"</b>");

          //console.log(result_parsed['summary']);
          $(".counter-desc").html(result_parsed['summary']);
          for(var i=0; i<result_parsed['summary_list'].length;i++){
            //	console.log(result_parsed[0]['rowcount']);

            var coords = JSON.parse(result_parsed['summary_list'][i].st_asgeojson);
            $("#ListGroup").append('<li id='+coords.coordinates[0]+' name = '+coords.coordinates[1]+' class="list-group-item zoomTo" >'+result_parsed['summary_list'][i].field+' <span class="pull-right"><a href="#"><i class="fa fa-crosshairs"></i></a></span></li>');

          }

          $("#viewall").attr('href','data_map?tbl='+selected_list_id);
          $("#downloaddata").attr('href','get_csv_dataset?tbl='+selected_list_id);


        }


      });

    }


    Loadlist(selected_category,selected_category_name);

    $('#active_layers').on('change',function(){
      var selected_list_id=$('#active_layers option:selected').attr('id');
   //    var selected_category_name=$('#active_layers option:selected').attr('name');
   // console.log(selected_category_name);
   // console.log(selected_list_id);
      Loadlist(selected_list_id);
    });


    $("#ListGroup").on('click', '.zoomTo', function(){ //console.log("fadsdfasfd");
    var lat = parseFloat($(this).attr('id'));
    var lon = parseFloat($(this).attr('name'));
    map.setView([lon,lat],18);
  });


  $( ".CheckBox" ).on('click', function( event ) {
    $(this).attr('disabled',true);

    //layerClicked = window[event.target.value];
    layerClicked = window[$(this)[0].value];

    var layertoggled = ($(this).attr('id')).replace("_toggle","");
    var layertoggled_cat_name = ($(this).attr('name'));
    var	togglename=toTitleCase(layertoggled.replace("_"," "));
// console.log(layertoggled_cat_name);

    if (map.hasLayer(layerClicked)) {
      map.removeLayer(layerClicked);


      for (var i = 0; i < $('.drop').children().length; i++) {
        if($('.drop').children()[i].id==layertoggled){
          $('.drop').children()[i].remove();
        }
      }
      if(Loadlist($('.drop').children()[0] != 'undefined')){
      Loadlist($('.drop').children()[0].id);
      }
    }
    else{
      map.addLayer(layerClicked);

      $(".leaflet-right").css("right","260px");
      $('#right-panel-toggle').css('display','block');
      $("#summary_container").css('display','block');
      $("#popup_container").css('display','none');

      $('.drop option:selected').removeClass('active');
      $('.drop').prepend("<option id="+layertoggled+" selected>"+layertoggled_cat_name+"</option>");
      //s$('#'+layertoggled).attr({'selected':true});

      Loadlist(layertoggled,layertoggled_cat_name);


    } ;
    $(this).attr('disabled',false);
  });


  $( ".CheckBoxStart" ).click(function( event ) {
    layerClicked1 = window[event.target.value];
    map.addLayer(layerClicked1);
    map.removeLayer(layerClicked1)

  });

  //sub-cat
  $('.sub-cat').on('click',function(){
    //$('.treeview-content-p input:checked')
  //  console.log("entered");
    var data=$(this).val() ;
    var data_count=$(this).val() ;
    var col= $(this).attr('id') ;
    var tbl=$(this).attr('name') ;
    //  console.log($(this).name()) ;
    single_map=data.replace(/ /g, "_");
    $('#'+tbl+'_toggle').removeClass('active');
    if(map.hasLayer(window[single_map])){
    //  console.log("if");
      map.removeLayer(window[single_map]);
      //console.log('if');
    }
    else {
//console.log("else");
      //console.log('else');
      $.ajax({
        type: "GET",
        //  data: name,
        url:  "MapController/get_sub_cat_data?tbl="+tbl+"&&data="+data+"&&col="+col,
        beforeSend: function() {
          //  $.LoadingOverlay("show");
        },
        complete: function() {
          //  $.LoadingOverlay("hide", true);
        },
        success: function (result) {

          //alert(result);


          data=JSON.parse(result);
          sub_cat=JSON.parse(data.geojson);
          sub_style=JSON.parse(data.style);
          marker_type=data.marker_type;
          popup_content_parsed=data.popup_content;
          count=data.count_data;
         //console.log(count);
        //  console.log(data_count);
          //layers


          //map.options.minZoom = 14;
          //console.log("adfasfsadfasfasdfasfdasdfsafasdfsafasfasfsafsa");


          //  map.addLayer(googleStreets);
   $('#dialog_sub_cat').show();

  $('#dialog_sub_cat').html('<b>'+count+'</b> '+data_count+' found');

          //layer
          //console.log(data.replace(/ /g, "_"));

          //console.log($(this).attr('id'));
          window[single_map]=new L.GeoJSON(sub_cat,{
            pointToLayer: function(feature, latlng) {
              if(marker_type=='icon'){



                icons=L.icon({
                  iconSize: [21, 27],
                  iconAnchor: [13, 27],
                  popupAnchor:  [2, -24],

                  iconUrl:sub_style.icon
                });
                //  console.log(sub_style.icon);
                var marker = L.marker(latlng,{icon:icons});


              }else{



                icons=L.icon({
                  iconUrl: "https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png"
                });
                var marker = L.circleMarker(latlng);
                //for(data in style){
              }
              return marker;

            },
            onEachFeature: function(feature, layer) {
              if(marker_type !='icon'){
                layer.setStyle(sub_style);
              }


              var popUpContent = "";

              popUpContent += '<table style="width:100%;" id="District-popup" class="popuptable table table-hover table-striped">';

              //for (data in popup_content_parsed) {
              pop = JSON.parse(popup_content_parsed);
            //  console.log(pop);

              for(data in pop.a){
                //console.log(data);
                pop1 = pop.a[data].col;
                name = pop.a[data].name;
                popUpContent += "<tr>" + "<th><strong>"+name+"</strong></th>" + "<td>" +  feature.properties[pop1]  + "</td></tr>";
              }

              popUpContent += '</table>';



              layer.bindPopup(L.popup({

                closeOnClick: true,

                closeButton: true,

                keepInView: true,

                autoPan: true,

                maxHeight: 200,

                minWidth: 250

              }).setContent(popUpContent));
            }
          }).addTo(map);
          // map.removeLayer(window[''+cat_tbl_array_name[i]]);
          map.removeLayer(window[tbl]);




          //map.addLayer(col);


        }


      });
    }
  });

  //sub-cat



//filter

  $('.treeview-content-p').on('click','.form-check > .filterswitch',function(event){
    var layerClickedFilter = window[event.target.value];
    if(map.hasLayer(layerClickedFilter)){
        map.removeLayer(layerClickedFilter)
    }
    else {
        map.addLayer(layerClickedFilter);
    }


  });


$('.filterthis').on('click',function(){

    //$('.applied-list').html('');
    $(".selected_filter_ex").val('');
    $(".selected_filter_query").val('');
  var tbl=($(this).attr("id"));
  var name_cat=($(this).attr("name"));
  console.log(name_cat);



  $.ajax({
    type: "GET",
    //  data: name,
    url:  "MapController/get_map_filter?tbl="+tbl,
    beforeSend: function() {
      $(".filter_values").html(' ');
       $(".filter_column_name").html(' ');
       $(".filter_column_name").append('<b>Loading Data</b>');
    },
    complete: function() {
      //  $.LoadingOverlay("hide", true);
    },
    success: function (result) {

      var filter_column = JSON.parse(result);
     //console.log(filter_column);
     $(".filter_values").html(' ');
     $(".filter_column_name").html(' ');
      for(var i=0;i<filter_column.length;i++){

      //  console.log(filter_column[i].nepali_lang);
          $(".filter_column_name").append('<div class="col-md-12"><label><input class="filter_value" type="radio" name="'+tbl+'" id="'+filter_column[i].nepali_lang+'" value="'+filter_column[i].eng_lang+'"/><p class="exp text-center filterthis_side_p" id="'+name_cat+'">'+filter_column[i].nepali_lang+' </p></label></div>');

    }


}
  });



});

$(document).on('click','.filter_value',function(){

  var col_name=$(this).val();
  var name=$(this).attr('id');

  var data_tbl=$(this).attr('name');
  $.ajax({
    type: "GET",
    //  data: name,
    url:  "MapController/get_map_filter_value?tbl="+data_tbl+"&&col="+col_name,
    beforeSend: function() {

      //  $.LoadingOverlay("show");
      $(".filter_values").html(' ');
      $(".filter_values").append('<b>Loading<b>');
    },
    complete: function() {
      //  $.LoadingOverlay("hide", true);
    },
    success: function (result) {
   $('.ex_map').prop("disabled", false);
      var values = JSON.parse(result);

      $(".filter_values").html(' ');

      for(var i=0;i<values.length;i++){


          //console.log(values[i][col_name]);

            $(".filter_values").append('<div class="col-md-12"><label><input class="filter_value_item" type="radio" name="" value="'+values[i][col_name]+'"disabled/><p class="exp text-center">'+values[i][col_name]+'</p></label></div>');



      }

      $(".selected_filter_ex").val(name);
      $(".selected_filter_query").val(col_name);
      $(".selected_filter_query").attr('id',data_tbl);
  //  console.log($(".selected_filter_ex").val());





    }


  });
  });


  $('.ex_map').on('click',function(){

//  console.log($(this).val());
    $('.filter_value_item').prop("disabled", false);
    $(".selected_filter_ex").val($(".selected_filter_ex").val()+' '+$(this).val());
    $(".selected_filter_query").val($(".selected_filter_query").val()+' '+$(this).val());


  //  console.log('ex');
});

$(document).on('click','.filter_value_item',function(){

    $(".selected_filter_ex").val($(".selected_filter_ex").val()+' '+$(this).val());
    $(".selected_filter_query").val($(".selected_filter_query").val()+" '"+$(this).val()+"'");

  });



var count_filter = 0;
applied_filter_tbl_list=[];
$('.applied_filter').on('click',function(){

  //console.log('click');
  $('#table_filter >thead tr').html('');
  $('#table_filter >tbody').html('');
  $("div#applied_filter_content").html("");
  var show_qry=$(".selected_filter_ex").val();
  var qry=$(".selected_filter_query").val();
  var qry_tbl=$(".selected_filter_query").attr('id');

  $('#'+qry_tbl+'_treeview').append('<div class="form-check" id="'+qry_tbl+count_filter+'filter">'+

    '<input type="checkbox" name="" class="form-check-input filterswitch" value="'+qry_tbl+count_filter+'" checked><label class="form-check-label">'+show_qry+'</label>'+

  '</div>');

  $('h6#filter_tbl_name').html(""+show_qry+"");



  $('.applied-list').append('<tr id = "'+qry_tbl+'" class="'+qry_tbl+count_filter+'list"><th scope="row"></th><td>'+qry_tbl+'</td><td>'+show_qry+'</td><td><i class="fa fa-trash delete_filter" id="'+qry_tbl+count_filter+'"></i></td></tr>');
   applied_filter_tbl_list.push(qry_tbl);
  //console.log('result');

  var success_qry ;
  success_qry = 0;

  $.ajax({
    type: "GET",
    async : false,
    //  data: name,
    url:  "MapController/filter_query?qry="+qry+"&&tbl="+qry_tbl,
    beforeSend: function() {
      //  $.LoadingOverlay("show");
    },
    complete: function() {
      //  $.LoadingOverlay("hide", true);
    },
    success: function (result) {

 //console.log(result);

     var data=JSON.parse(result);
     console.log(data);
  var modal_table=JSON.parse(data.table_data);
  map_json=JSON.parse(data.geojson);
  sub_style=JSON.parse(data.style);
  marker_type=data.marker_type;
  popup_content_parsed=data.popup_content;
  table_n=data.table_name;

   //console.log(modal_table);
  // console.log(marker_type);
  // console.log(popup_content_parsed);


document.getElementById("filter_tbl_name").innerHTML = ''+qry;
//$('h4').html(show_qry);

for(var i=0;i<modal_table.length;i++){

var tbl_body=""
 tbl_body += '<tr>';

  $.each(modal_table[i], function(k, v) {
console.log(k);

if(k=='the geom'){

}else{
    $('#table_filter >thead tr').append('<th scope="col">'+k+'</th>');




     tbl_body += '<td>'+v+'</td>';
       }


    //display the key and value pair
    //alert(k + ' is ' + v);
  //  console.log(k);


});

 tbl_body += '</tr>';
 //console.log(tbl_body);
$('#table_filter >tbody').append(tbl_body);


}//loop for table end

$('#'+table_n+'_toggle').removeClass('active');
$('a#filter_download').attr('href', 'MapController/csv_filter_query?qry='+qry+'&&tbl='+qry_tbl);

//map for filter
//console.log(qry_tbl+count_filter);
window[qry_tbl+count_filter] =new L.GeoJSON(map_json,{
  pointToLayer: function(feature, latlng) {
    if(marker_type=='icon'){



      icons=L.icon({
        iconSize: [21, 27],
        iconAnchor: [13, 27],
        popupAnchor:  [2, -24],

        iconUrl:sub_style.icon
      });
      //  console.log(sub_style.icon);
      var marker = L.marker(latlng,{icon:icons});


    }else{



      icons=L.icon({
        iconUrl: "https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png"
      });
      var marker = L.circleMarker(latlng);
      //for(data in style){
    }
    return marker;

  },
  onEachFeature: function(feature, layer) {
    if(marker_type !='icon'){
      layer.setStyle(sub_style);
    }


    var popUpContent = "";

    popUpContent += '<table style="width:100%;" id="District-popup" class="popuptable">';

    //for (data in popup_content_parsed) {
    pop = JSON.parse(popup_content_parsed);
  //  console.log(pop);

    for(data in pop.a){
      //console.log(data);
      pop1 = pop.a[data].col;
      name = pop.a[data].name;
      popUpContent += "<tr>" + "<td>"+name+"</td>" + "<td>" +  feature.properties[pop1]  + "</td></tr>";
    }

    popUpContent += '</table>';



    layer.on('click',function(){
      console.log(popUpContent);
      $("#summary_container").css('display','none');
      $("#popup_container").css('display','block');
      $("#popup_container").html(popUpContent);

    });
  }
}).addTo(map);
count_filter = count_filter+1;
map.removeLayer(window[table_n]);


$(".selected_filter_ex").val('');





//map for filter end


success_qry = 1;
//console.log(success_qry);
}//succes end

});//ajaxa end



//console.log(success_qry);
if(success_qry==0){
$("div#applied_filter_content").html("<h4>Filter Query wrong or No data to respective filter</h4>");
}else{

}
 console.log('#');
 console.log($('#'+qry_tbl).children());

//changing filter icon  after filter
$('#'+qry_tbl).children('img')[0].src='http://localhost/vso/assets/img/';

});

//deleting the row  of filter list
$('.applied-list').on('click','tr > td > .delete_filter',function(){

//console.log($(this).closest('tr'));
  //$(this).closest('tr').remove();
  var classs = $(this).closest('tr')[0].className;
  console.log($(this).closest('tr')[0].id);

  $('.applied-list > .'+classs).remove();
  var id = $(this)[0].id+"filter";
  var mapLayerId = $(this)[0].id;
  $("#"+id).remove();

  map.removeLayer(window[mapLayerId]);

  var deleted_tr_id = $(this).closest('tr')[0].id;
  console.log(deleted_tr_id);
  if(jQuery.inArray(deleted_tr_id, applied_filter_tbl_list) !== -1){
    var index_id = jQuery.inArray(deleted_tr_id, applied_filter_tbl_list);
    applied_filter_tbl_list.splice(index_id,1);
    if(jQuery.inArray(deleted_tr_id, applied_filter_tbl_list) == -1){ console.log("entereeeeeeeeeeeeeeeeeeeeed");
      $('#'+deleted_tr_id).children('img')[0].src='http://localhost/vso/assets/img/filter.png';
    }
  }



});
//filter



});
</script>


<!-- panel toggle script -->
<script>
$('#close-panel-left').click(function(){
  $('#left-panel-toggle').slideToggle('fast', function(){
    if($(this).is(':hidden')){
      $(".leaflet-left").css("left","10px");
    }
    else {
      $(".leaflet-left").css("left","21.5%");
    }
  });
  $(this).toggleClass('transform');

});
</script>

<script>
$('#right-panel-toggle').toggle();

$('#close-panel-right').click(function(){
  $('#right-panel-toggle').slideToggle('fast', function(){
    if($(this).is(':hidden')){
      $(".leaflet-right").css("right","10px");
    }
    else {
      $(".leaflet-right").css("right","260px");
    }
    //console.log("toggled");
  });
  $(this).toggleClass('transform');
});

$('.specific').click(function(){
$(this).siblings("ul").toggleClass('show');
});

//sub cat show
$('#'+selected_category+"_sub").siblings("ul").toggleClass('show');
console.log(selected_category);


</script>
