<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style> 
		#contenedor{
			padding-left : 100px;
			padding-right: 75px;
		}
		.news {
		  columns: 100px 3;
		}
    </style>

</head>
<body>
 <div id="contenedor">

<h2>News</h2>
<h4>What kind of news do you want ?</h4>
<form method="post" action="ACT_30b.php">

<input type="radio" name="Politics" value="Politics"> Politics<br/>
<input type="radio" name="Economy" value="Economy"> Economy<br/>
<input type="radio" name="Sports" value="Sports"> Sports<br/><br/>

<input type="submit" name="submit" value="Submit"><br/><br/>
 
</form>
<form method="post" action="ACT_30c.php">
Delete Cookies?
<input type="submit" name="delete" value="Delete"><br/><br/>
 
</form>
 <?php 

if (isset($_COOKIE['Politics']) || (!isset($_COOKIE['Politics']) && (!isset($_COOKIE['Economy'])) && (!isset($_COOKIE['Sports'])) ) ){  ?> 
   <h3><span style="color:red">Politics:</span> Trump’s 2020 State of the Union address, annotated</h3> 
   <div class="news">
   	Tonight, I stand before you to share the incredible results. Jobs are booming, incomes are soaring, poverty is plummeting, crime is falling, confidence is surging, and our country is thriving and highly respected again! America’s enemies are on the run, America’s fortunes are on the rise, and America’s future is blazing bright. The years of economic decay are over. The days of our country being used, taken advantage of, and even scorned by other nations are long behind us. Gone too are the broken promises, jobless recoveries, tired platitudes, and constant excuses for the depletion of American wealth, power, and prestige.
   </div>
     <h3><span style="color:red">Politics:</span> Iowa Democratic vote-reporting meltdown hands opening to Trump</h3> 
   <div class="news">
   	(CNN)The Democratic 2020 mission to oust President Donald Trump could not have got off to a more disastrous and embarrassing start.
	The party couldn't even deliver a first-in-the-nation election night winner after a vote-reporting debacle in Iowa — where candidates spent months and millions of dollars vying for a glittering opening prize in their nominating contest.
	"Iowa, you have shocked the nation," said former South Bend, Indiana, Mayor Pete Buttigieg.
	It was a bold attempt to declare victory in the absence of a result, but the 38-year-old inadvertently cast an ironic judgment on a political train wreck.
	The big Hawkeye State miss will be agonizing for whoever comes out on top but for any candidates who under performed -- perhaps former Vice President Joe Biden -- it might turn into a priceless lifeline.
   </div>



	
 <?php }
if (isset($_COOKIE['Economy']) || (!isset($_COOKIE['Politics']) && (!isset($_COOKIE['Economy'])) && (!isset($_COOKIE['Sports'])) ) ){  ?> 
	   <h3><span style="color:red">Economy:</span> What the Mersey tells us about Brexit</h3> 
   <div class="news">
   	After three years of Brexit fog, there are now some significant economic choices and trade offs.
	And you don't have to go far from the Mersey estuary to see them all clearly.
	At the famous Port of Liverpool the big hope is Brexit can thrive from a boost in transatlantic trade, as the UK uses the freedom it is regaining to run its own trade policy.
	Here they already handle imported grains and biofuels from the USA. The bosses, while cautious, think that there will be much more growth.
	"Places like Liverpool could benefit from a free trade deal with the US, we are the number one port for grains imported from the US, we know that's a market they wants to grow," said Stephen Carr, group commercial director of Peel Ports.
	"What we're doing is trying to anticipate benefits as a result of Brexit, how trade flows might shift, and adjust our strategy accordingly."
   </div>
      <h3><span style="color:red">Economy:</span> HS2: Johnson drops 'keep digging' hint over future of project</h3> 
   <div class="news">
   Boris Johnson has suggested the only answer to the "hole" enveloping HS2 is "to keep digging".
	In an interview for Sky Kids' FYI show, the PM criticised the "profligate" rail project and its "hopeless" management.
	But he appeared to rule out pulling the plug on the controversial scheme, which might cost in excess of £100bn, saying "in a hole the size of HS2, the only thing to do is keep digging".
	A final decision on the UK's largest construction project is due next month.
	HS2 is designed to link London, Birmingham, Manchester and Leeds, cutting overcrowding on the railways and helping to rebalance the UK's economy.
   </div>
<?php } 
if (isset($_COOKIE['Sports']) || (!isset($_COOKIE['Politics']) && (!isset($_COOKIE['Economy'])) && (!isset($_COOKIE['Sports'])) ) ){  ?> 
	   <h3><span style="color:red">Sports:</span> Barcelona in meltdown after Lionel Messi hits back at Eric Abidal</h3> 
   <div class="news">
   	Barcelona were plunged into crisis when Lionel Messi publicly called out the sporting director Eric Abidal, challenging him to name names and accusing him of tarnishing the players’ reputation.
    The Argentinian furiously reacted to what he saw as Abidal’s attempt to lay the blame for the recent sacking of Ernesto Valverde with the players, and demanded the Frenchman take responsibility for his own decisions. His outburst is all the more significant because Messi has a clause in his contract which enables him to unilaterally walk away for free at the end of the season.
   </div>
      <h3><span style="color:red">Sports:</span> England’s Eddie Jones takes aim at ‘niggly, goading’ Scotland</h3> 
   <div class="news">
    Given England’s fate in Paris, when their pledge to brutalise France spectacularly backfired, it is tempting to ask now much Jones has learned about British history and the perennial desire of England’s neighbours to stick the sweet chariot somewhere dark and enclosed. There could, of course, be a simpler explanation: lobbing a few jibes at Scotland is one way of diverting attention away from Sunday’s dire first-half display.
	Jones words didn’t do England players any favours, says Scotland’s Dell
	 Read more
	Whatever his primary motivation, Jones has decided to double down on his publicly-expressed distaste after this fixture two years ago, when he was abused on a train to Manchester the following day and unseemly scenes took place beforehand in the players’ tunnel. “They’re a niggly side, aren’t they?” suggested the head coach, reflecting on England’s 25-13 loss in 2018. “[There was] the scene two years ago when they tried to goad a couple of players.
   </div>
 <?php }  ?> 


</div>	
</body>
</html>