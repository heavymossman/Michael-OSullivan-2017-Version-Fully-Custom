<?php include 'header.php'; ?>

	<div class="container mt-2">

		<div class="row">

			<div class="col-md-12 p-2">

				<h1>UTI Trade Performance Calculator</h1>

			</div>

			<div class="col-md-12 p-2">

				<h3>Input</h3>

				<fieldset class="form-group">
				    <legend>Buying or Selling</legend>
				    <div class="form-check">
				      <label class="form-check-label">
				        <input type="radio" class="form-check-input" name="optionsRadios" id="long" value="option1" checked>
				        LONG
				      </label>
				    </div>
				    <div class="form-check">
				    <label class="form-check-label">
				        <input type="radio" class="form-check-input" name="optionsRadios" id="short" value="option2">
				        SHORT
				      </label>
				    </div>
				  </fieldset>


				<div class="form-group row">
					  <label for="example-number-input" class="col-2 col-form-label">Current Price</label>
					  <div class="col-6">
					    <input class="form-control" type="number" id="inputPrice">
					  </div>
				</div>

				<div class="form-group row">
					  <label for="example-number-input" class="col-2 col-form-label">ATR on day of Point 4</label>
					  <div class="col-6">
					    <input class="form-control" type="number" id="inputAtr">
					  </div>
				</div>
				<div class="form-group row">
					  <label for="example-number-input" class="col-2 col-form-label">(Ideal Entry Point)LTCT Point 4 Price</label>
					  <div class="col-6">
					    <input class="form-control" type="number" id="inputLtctP">
					  </div>
				</div>

				<button id="calculate" class="btn btn-success btn-lg" onclick="calculate()">Calculate</button>

				<hr />
				<h3>Output</h3>
				<p>Current Price: <strong><span id="intNum"></span></strong></p>
				<p>Min Take Profit: <strong><span id="takeProfit"></span></strong></p>
				<p>ATR: <strong><span id="atr"></span></strong></p>
				<p>6 Day ATR: <strong><span id="sixDayAtr"></span></strong></p>
				<p>Stop Loss: <strong><span id="stopLoss"></span></strong></p>
				<p>Cooked Status: <strong><span id="cooked"></span></strong></p>

			</div>


		</div>

	</div>




<?php include 'footer-bootstrap.php'; ?>

<script type="text/javascript">

// YOU MUST USE PARSEFLOAT WITH INTERGARS WITH DECIMNAL PLACES!


	function calculate(){

		var intNum, atr, sixDayAtr, takeProfit, stopLoss, ltct4, difference;

		intNum = parseFloat(document.getElementById('inputPrice').value)
		atr = parseFloat(document.getElementById('inputAtr').value)
		ltct4 = parseFloat(document.getElementById('inputLtctP').value)
		
		sixDayAtr = atr * 6;


		if(document.getElementById('long').checked) {
		  stopLoss = intNum - (sixDayAtr / 3);
		  takeProfit = intNum + sixDayAtr;

		} else if(document.getElementById('short').checked) {
		  takeProfit = intNum - sixDayAtr;
		  stopLoss = intNum + (sixDayAtr / 3);
		}

		if (intNum > ltct4){
			difference = intNum - ltct4; 
		} else if (ltct4 > intNum){
			difference = ltct4 - intNum;
		}

		//stopLoss = intNum - (sixDayAtr / 3); //2 x ATR is stop loss which is 1% of account value and 6 x ATR isprofit margin, and 3% of account value

		console.log(intNum)

		if (difference > sixDayAtr){
			$('#cooked'). html("TRADE IS NOT GOOD, because" + " " + difference.toFixed(4) + " > " + sixDayAtr.toFixed(4))
		} else {
			$('#cooked'). html("TRADE IS GOOD, because " + difference.toFixed(4) + " < " + sixDayAtr.toFixed(4))
		};

		$('#intNum').html(intNum);
		$('#takeProfit').html(takeProfit);
		$('#atr').html(atr);
		$('#sixDayAtr').html(sixDayAtr.toFixed(4));
		$('#stopLoss').html(stopLoss.toFixed(4));


	};


	




	



</script>


<?php include 'footer.php'; ?>
