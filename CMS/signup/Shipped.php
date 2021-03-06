<style type="text/css">
	ol.progtrckr {
    margin: 0;
    padding: 0;
    list-style-type none;
}

ol.progtrckr li {
    display: inline-block;
    text-align: center;
    line-height: 3.5em;
}

ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%; }
ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%; }
ol.progtrckr[data-progtrckr-steps="4"] li { width: 24%; }
ol.progtrckr[data-progtrckr-steps="5"] li { width: 19%; }
ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%; }
ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%; }
ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%; }
ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%; }

ol.progtrckr li.progtrckr-done {
    color: black;
    border-bottom: 8px solid yellowgreen;
}
ol.progtrckr li.progtrckr-todo {
    color: silver; 
    border-bottom: 8px solid silver;
}

ol.progtrckr li:after {
    content: "\00a0\00a0";
}
ol.progtrckr li:before {
    position: relative;
    bottom: -2.5em;
    float: left;
    left: 50%;
    line-height: 1em;
}
ol.progtrckr li.progtrckr-done:before {
    content: "\2713";
    color: white;
    background-color: yellowgreen;
    height: 2.2em;
    width: 2.2em;
    line-height: 2.2em;
    border: none;
    border-radius: 2.2em;
}
ol.progtrckr li.progtrckr-todo:before {
    content: "\039F";
    color: silver;
    background-color: white;
    font-size: 2.2em;
    bottom: -1.2em;
}


.greyBg{ margin-top:20px}
.inner_msg{
	clear: both;
	padding: 10px;
	margin: 0 auto;
	width:99%;
	background-color:#efefef;
	border:1px solid #ccc;
	min-height: 150px;
}
.inner_msg p{
	color:#000; font-size:15px;
	text-align: center;

}
.list option{
	margin-top: 10px
}
.inboxMain{
	min-height:400px; background-color:#fff; padding:10px;
	border:1px solid #ccc
}
.inboxRow{
	border-bottom:1px solid #ccc; padding:10px
}


</style>
<ol class="progtrckr" data-progtrckr-steps="5">
                    <li class="progtrckr-done">Pending</li>
                    <li class="progtrckr-done">Dispatched </li>
                    <li class="progtrckr-done">Processed</li>
                    <li class="progtrckr-done">Shipped</li>
                    <li class="progtrckr-todo">Delivered</li>
              </ol>