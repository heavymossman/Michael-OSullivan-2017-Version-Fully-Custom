<?php include 'header.php'; ?>

    <div class="container mt-2">
      <div class="row">
        <div class="col-md-12">
          <h1>Simple JS Quiz</h1>
          <p>Test your political knowledge in stupid fundamentals</p>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="results"></div>
          
          <form name="quizForm" onsubmit="return submitAnswers()">
            <h3 class="py-1">1. In which country was the NHS Founded?</h3>
            <fieldset class="form-group row py-2">
              <legend class="col-form-legend col-sm-2">Please select your answer</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q1" id="q1a" value="a" >
                  a. England
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q1" id="q1b" value="b" >
                  b. Scotland
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q1" id="q1c" value="c" >
                  c. Wales
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q1" id="q1d" value="d" >
                  d. Northern Ireland
                  </label>
                </div>
                
              </div>
            </fieldset>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="py-1">2. In which decade was the Labour Party formed?</h3>
            <fieldset class="form-group row py-2">
              <legend class="col-form-legend col-sm-2">Please select your answer</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q2" id="q2a" value="a" >
                  a. England
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q2" id="q2b" value="b" >
                  b. Scotland
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q2" id="q3c" value="c" >
                  c. Wales
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q2" id="q4d" value="d" >
                  d. Northern Ireland
                  </label>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="py-1">3. Which Labour leader was the longest serving leader?</h3>
            <fieldset class="form-group row py-2">
              <legend class="col-form-legend col-sm-2">Please select your answer</legend>
              <div class="col-sm-10">
                 <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q3" id="q3a" value="a" >
                  a. England
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q3" id="q3b" value="b" >
                  b. Scotland
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q3" id="q3c" value="c" >
                  c. Wales
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q3" id="q3d" value="d" >
                  d. Northern Ireland
                  </label>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="py-1">4. Which Labour leader recieved the least amount of votes in any general election?</h3>
            <fieldset class="form-group row py-2">
              <legend class="col-form-legend col-sm-2">Please select your answer</legend>
              <div class="col-sm-10">
                 <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q4" id="q4a" value="a" >
                  a. England
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q4" id="q4b" value="b" >
                  b. Scotland
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q4" id="q4c" value="c" >
                  c. Wales
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q4" id="q4d" value="d" >
                  d. Northern Ireland
                  </label>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="py-1">5. Why does the Labour Party wish to destory itselfs and those around it?</h3>
            <fieldset class="form-group row py-2">
              <legend class="col-form-legend col-sm-2">Please select your answer</legend>
              <div class="col-sm-10">
                 <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q5" id="q5a" value="a" >
                  a. England
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q5" id="q5b" value="b" >
                  b. Scotland
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q5" id="q5c" value="c" >
                  c. Wales
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="q5" id="q5d" value="d" >
                  d. Northern Ireland
                  </label>
                </div>
              </div>
            </fieldset>
            <p>Submit your results</p>
            <button type="submit" class="btn btn-danger btn-lg" onClick="scroll(0,0);">Submit</button>
          </div>
        </div></form>
      </div>
    <!--container-->

     <?php include 'footer-bootstrap.php'; ?>

    <script src="js/simplequiz.js"></script>


    <?php include 'footer.php'; ?>