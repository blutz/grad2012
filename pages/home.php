<script type="text/javascript">
var sixWords = Array();
var sixWordsAuthors = Array();

sixWords[0]="Forever love UCLA, forever hate USC."
sixWordsAuthors[0]="Eric Curry"

sixWords[1]="amazing, unforgettable experiences +horrible parking=UCLA"
sixWordsAuthors[1]="Jasmine Shah"

sixWords[2]="Enough happiness to last a lifetime."
sixWordsAuthors[2]="Travis Fuller"

sixWords[3]="Found: education, independence, calling, sexuality, self."
sixWordsAuthors[3]="Nic Nelson"

sixWords[4]="I found culture, community, and myself."
sixWordsAuthors[4]="Linzy Bingcang"

sixWords[5]="Great knowledge, love, friends, opportunities, prestige!"
sixWordsAuthors[5]="Kathy Phuong Nguyen"

sixWords[6]="don't forget where you came from."
sixWordsAuthors[6]="@kevdelca"

sixWords[7]="I found out who I am."
sixWordsAuthors[7]="Scott Wun"

sixWords[8]="pol sci major, no Friday class"
sixWordsAuthors[8]="Scott Saloman"

sixWords[9]="419 acres, measureless adventure, forever home."
sixWordsAuthors[9]="Ethan Scapellati"

sixWords[10]="She hoped.  She jumped. She flew."
sixWordsAuthors[10]="Tina Ngo"

sixWords[11]="UCLA= growth, learning, love, pride & confidence."
sixWordsAuthors[11]="Yolanda Michel"

var maxSixWords = 11;
var currentWords = Math.floor(Math.random()*(maxSixWords+1));

$(document).ready(function(){
	changeWord();
	$('a#sixWordsPrev').click(function() {changeWord(true)});
	$('a#sixWordsNext').click(function() {changeWord(false)});
});

function changeWord(backward) {
	if(backward)
		currentWords--;
	else
		currentWords++
	if(currentWords > maxSixWords)
		currentWords = 0;
	if(currentWords < 0)
		currentWords = maxSixWords;
	$('#sixWords').fadeOut(200, function(){
		$(this).html(sixWords[currentWords]).fadeIn(200);
	});
	$('#sixWordsAuthor').fadeOut(200, function(){
		$(this).html('&mdash;'+sixWordsAuthors[currentWords]).fadeIn(200);
	});
}
</script>
<div id="homeLanding" style="text-align:center">
<h1 id="homeWelcome">Graduation Issue<br />2012</h1>

<h6 style="margin-top:50px">Six words about UCLA</h6>
<h2 id="sixWords"></h2>
<h3 id="sixWordsAuthor"></h3>
<p class="sixWordsController"><a id="sixWordsPrev">&larr;Previous</a><a id="sixWordsNext">Next&rarr;</a></p>
<p class="sixWordsExplainer">Add your own six words that describe your time at UCLA by emailing us at <a href="mailto:online@media.ucla.edu">online@media.ucla.edu</a>.</p>

<div><object style="width:420px;height:402px" ><param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=mini&amp;backgroundColor=%23222222&amp;documentId=120611223843-059bc43d8eed4dd0a2dc8ac55505a269" /><param name="allowfullscreen" value="true"/><param name="menu" value="false"/><param name="wmode" value="transparent"/><embed src="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf" type="application/x-shockwave-flash" allowfullscreen="true" menu="false" wmode="transparent" style="width:420px;height:402px" flashvars="mode=mini&amp;backgroundColor=%23222222&amp;documentId=120611223843-059bc43d8eed4dd0a2dc8ac55505a269" /></object></div>

<div><object style="width:420px;height:402px" ><param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=mini&amp;backgroundColor=%23222222&amp;documentId=120611224018-e0164e13af4e400496cd0a7331934003" /><param name="allowfullscreen" value="true"/><param name="menu" value="false"/><param name="wmode" value="transparent"/><embed src="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf" type="application/x-shockwave-flash" allowfullscreen="true" menu="false" wmode="transparent" style="width:420px;height:402px" flashvars="mode=mini&amp;backgroundColor=%23222222&amp;documentId=120611224018-e0164e13af4e400496cd0a7331934003" /></object></div>

<div><object style="width:420px;height:402px" ><param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=mini&amp;backgroundColor=%23222222&amp;documentId=120613045647-4b1ba4ecd8b74b2db4e1f0b7897c4609" /><param name="allowfullscreen" value="true"/><param name="menu" value="false"/><param name="wmode" value="transparent"/><embed src="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf" type="application/x-shockwave-flash" allowfullscreen="true" menu="false" wmode="transparent" style="width:420px;height:402px" flashvars="mode=mini&amp;backgroundColor=%23222222&amp;documentId=120613045647-4b1ba4ecd8b74b2db4e1f0b7897c4609" /></object></div>
</div><!-- end div#homeLanding -->