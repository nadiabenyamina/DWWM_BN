const quizData = [
    {
        question: "1. Comment se nomment les personnages principaux ?",
        a: "Joël et Ellie",
        b: "Tess et Sarah",
        c: "Fred et Nadia",
        correct: "a"
    },
    {
        question: "2. Combien de temps s'écoule dans le jeu pour l'histoire principale ?",
        a: "2 semaines",
        b: "1 an",
        c: "10 ans",
        correct: "b"
    },
    {
        question: "3. Qui est Bill ?",
        a: "Un ami de Joël",
        b: "Une connaissance",
        c: "Un simple collègue",
        correct: "a"
    },
    {
        question: "4. À quel endroit Tess s'est-elle faite mordre par un infecté ?",
        a: "Sur la jambe",
        b: "Sur le bras",
        c: "Sur l'épaule droite",
        correct: "c"
    },
    {
        question: "5. Comment s'appelle la fille de Joël ?",
        a: "Ellie",
        b: "Sarah",
        c: "Nadia",
        correct: "b"
    },
    {
        question: "6. Qui sont les deux frères qu'Ellie et Joël rencontreront un peu plus tard ?",
        a: "Titi et Grosminet",
        b: "Will et Carlton",
        c: "Henry et Sam",
        correct: "c"
    },
    {
        question: "7. Qui est la cheffe des Lucioles ?",
        a: "Marlène",
        b: "Marlaine",
        c: "Marline",
        correct: "a"
    },
    {
        question: "8. De quel instrument joue Joël ?",
        a: "Piano",
        b: "Guitare",
        c: "Batterie",
        correct: "b"
    },
    {
        question: "9. Comment s'appelle la meilleure amie d'Ellie ?",
        a: "Mercredi",
        b: "Jenna",
        c: "Riley",
        correct: "c"
    },
    {
        question: "10. Durant leur aventure, Joël et Ellie auront un cheval. Comment se nomme-t-il ?",
        a: "Paillette",
        b: "Durillon",
        c: "Callus",
        correct: "b"
    }
]

const quiz = document.querySelector('#quiz');
const answerEls = document.querySelectorAll('.answer');
const questionEl = document.querySelector('#question');
const a_text = document.querySelector('#a_text');
const b_text = document.querySelector('#b_text');
const c_text = document.querySelector('#c_text');
const submitBtn = document.querySelector('#submit');

let currentQuiz = 0;
let score = 0;

loadQuiz();

function loadQuiz() {
    deselectAnswers();

    const currentQuizData = quizData[currentQuiz];

    questionEl.innerHTML = currentQuizData.question;
    a_text.innerHTML = currentQuizData.a;
    b_text.innerHTML = currentQuizData.b;
    c_text.innerHTML = currentQuizData.c
}

function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false);
}

function getSelected() {
    let answer;
    answerEls.forEach(answerEl => {
        if (answerEl.checked){
            answer =  answerEl.id;
        }
    })
    return answer;
}

submitBtn.addEventListener('click', () => {
    const answer = getSelected();
    if (answer) {
        if (answer === quizData[currentQuiz].correct) {
            submitBtn.style.backgroundColor = '#44b927';
            score++;
        } else {
            submitBtn.style.backgroundColor = 'red';
        }

        currentQuiz++;

        if (currentQuiz < quizData.length) {
            loadQuiz();
        } else {
            quiz.innerHTML = `<h2>Tu as répondu correctement à ${score}/${quizData.length} questions.</h2>
            
            <button onclick="location.reload()">Recommencer</button>`
        }
    }
})