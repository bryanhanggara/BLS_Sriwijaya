<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('include.style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container {
          width: 80%;
          margin: auto;
        }

        .card {
          display: none;
          padding: 20px;
        }

        .active {
          display: block;
        }

        #prevBtn {
          /* float: left; */
          background: linear-gradient(to right, #FA4B37, #DF2771);
          margin-top: 10px;
          color: #f1f1f1;
          border-radius:12px;
        }

        #nextBtn {
          float: right;
          background: linear-gradient(to right, #FA4B37, #DF2771);
          margin-top: 10px;
          color: #f1f1f1;
          border-radius:12px;
        }

        #submitBtn {
          margin-top: 20px;
        }
        .container{
            margin-top: 100px;
        }

        .waktu{
          float: initial;
          width: 100%;
          margin: auto;
          text-align: center;
          color: #2E3D49;
        }

        .waktu h3{
            margin-left: 10px;
            
        }
        .soal{
            width: 100%;
            float: left;
            color: #2E3D49;
        }
        .soal h2{
            font-size: 2.4em;
            font-weight: 400;
        }
        .next-prev{
            width: 100%;
            /* float: right; */
        }
        .timer {
            margin-top: 10px;
        }
          
        .timer > svg {
            width: 200px;
            height: 200px;
        }

        .timer > svg > circle {
            fill: none;
            stroke-opacity: 0.3;
            stroke: #DF2771;
            stroke-width: 10;
            transform-origin: center center;
            transform: rotate(-90deg);
        }

        .timer > svg > circle + circle {
            stroke-dasharray: 1;
            stroke-dashoffset: 1;
            stroke-linecap: round;
            stroke-opacity: 1;
        }

        .timer.animatable > svg > circle + circle {
            transition: stroke-dashoffset 0.3s ease;
        }

        .timer > svg > text {
            font-size: 2rem;
        }

        .timer > svg > text + text {
            font-size: 1rem;
        }
        .form-check{
          padding-left:50px
        }
        .form-check:hover{
          transition: 0.5s ease-in-out;
          background-color: #DF2771;
          color: #f1f1f1;
          cursor: pointer;
        }
        .form-check-input:hover{
          cursor: pointer;
        }
        .form-check-label:hover{
          cursor: pointer;
        }

    </style>
</head>
<body>
    @include('include.nav-quiz')
    <div class="container">
       <div class="waktu">
        <h3>Waktu Ujian</h3>
      <div class="timer animatable">
        <svg>
          <circle cx="50%" cy="50%" r="90"/>
          <circle cx="50%" cy="50%" r="90" pathLength="1" />
          <text x="100" y="100" text-anchor="middle"><tspan id="timer"></tspan></text>
        </svg>
      </div>
    </div>
        <div class="soal">
            <h2><em>{{$categories->name}}</em> Bantuan Hidup Dasar</h2>
    <form action="{{route('client.test.store')}}" method="POST">
                @csrf
                @foreach ($categories->categoryQuestions as $question)
                <div class="card card-body">
                        <div class=" @if(!$loop->last) mb-3 @endif">
                            <h4>{{$loop->iteration}}. {{$question->question_text}}</h4>
                            <input type="hidden" name="questions[{{ $question->id }}]" value="">
                            @foreach($question->questionOptions as $option)
                                <div class="form-check form-control mt-3">
                                    <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]" id="option-{{ $option->id }}" value="{{ $option->id }}"@if(old("questions.$question->id") == $option->id) checked @endif>
                                    <label class="form-check-label" for="option-{{ $option->id }}">
                                        {{ $option->option_text }}
                                    </label>
                                </div>
                            @endforeach
            
                            @if($errors->has("questions.$question->id"))
                                <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                    <strong>{{ $errors->first("questions.$question->id") }}</strong>
                                </span>
                            @endif
                        </div>
                </div>
                @endforeach
                <div class="card">
                    <h2>Terimakasih</h2>
                    <p>Kuis kamu selesai, silahkan pilih submit</p>
                    <button type="submit" class="btn btn-success" id="submitBtn">Submit</button>
                </div>
        </div>
        <div class="next-prev">
            <a class="btn" id="prevBtn" disabled>Previous</a>
            <a class="btn" id="nextBtn">Next</a>
        </div>
    </div>

    <script>
        // Set the timer

        let timeLeft = 1200;
let timer = document.getElementById('timer');

function isTimeLeft() {
  return timeLeft > 0;
}

function countDown() {
  let minutes = Math.floor(timeLeft / 60);
  let seconds = timeLeft % 60;
  let display = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
  timer.innerHTML = display;

  if (timeLeft === 0) {
    clearInterval(intervalId);
    alert("Time is up!");
    document.getElementById("submitBtn").click();
  }
  timeLeft--;
}

function runTimer(timerElement) {
	const timerCircle = timerElement.querySelector('svg > circle + circle');
	timerElement.classList.add('animatable');
	timerCircle.style.strokeDashoffset = 1;
    
	let countdownTimer = setInterval(function(){
		if(isTimeLeft()){
			const timeRemaining = timeLeft-1;
			const normalizedTime = (1200 - timeRemaining) / 1200;
			timerCircle.style.strokeDashoffset = normalizedTime;
      let minutes = Math.floor(timeRemaining / 60);
      let seconds = timeRemaining % 60;
      let display = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
      timer.innerHTML = display;
		} else {
			clearInterval(countdownTimer);
			timerElement.classList.remove('animatable');
		}  
	}, 1000);
}

runTimer(document.querySelector('.timer'));

var intervalId = setInterval(countDown, 1000);
// Set up card navigation
var cards = document.querySelectorAll(".card");
var prevBtn = document.getElementById("prevBtn");
var nextBtn = document.getElementById("nextBtn");
var submitBtn = document.getElementById("submitBtn");
var currentCard = 0;

showCard(currentCard);

function showCard(cardIndex) {
  cards[currentCard].classList.remove("active");
  cards[cardIndex].classList.add("active");
  currentCard = cardIndex;

  if (currentCard === 0) {
    prevBtn.disabled = true;
  } else {
    prevBtn.disabled = false;
  }

  if (currentCard === cards.length - 1) {
    nextBtn.style.display = "none";
    submitBtn.style.display = "block";
  } else {
    nextBtn.style.display = "block";
    submitBtn.style.display = "none";
  }
}

prevBtn.addEventListener("click", function() {
  showCard(currentCard - 1);
});

nextBtn.addEventListener("click", function() {
  showCard(currentCard + 1);
});

submitBtn.addEventListener("click", function() {
  clearInterval(intervalId);

  var answers = [];
  var inputs = document.querySelectorAll("input[type='radio']:checked");

  if (inputs.length === cards.length) {
    for (var i = 0; i < inputs.length; i++) {
      answers.push(inputs[i].value);
    }

    // TODO: Add code to grade the quiz and display the results
    alert("Quiz submitted! Your answers: " + answers.join(", "));
  } else {
    alert("Yakin Untuk Melanjutkan?");
  }
});

    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>