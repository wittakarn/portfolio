var $images = $('.shuffle__image-container img');
var imagesCount = $images.length;
var animateTime = 4000;
var minRotateDegree = 3;
var maxRotateDegree = 7;
var previousRandomImageNumber = 1;

function bindEvent() {
    shuffleImage();
    showModal();
}

function shuffleImage() {
    function getImageNumber() {
        function getRandomNumber() {
            return Math.floor(Math.random() * imagesCount) + 1;
        }
        var randomNumber = getRandomNumber();
        while (randomNumber === previousRandomImageNumber) {
            randomNumber = getRandomNumber();
        }
        previousRandomImageNumber = randomNumber;

        return randomNumber;
    }

    function animate() {
        var degree = Math.floor(Math.random() * maxRotateDegree) + 3; // this will get a number between 3 and 7 ;
        degree *= Math.floor(Math.random() * 2) == 1 ? 1 : -1; // this will add minus sign in 50% of cases

        var randomNumber = getImageNumber();
        var $currentDisplayImage = $('img.show');

        $currentDisplayImage.css('z-index', '1');
        $currentDisplayImage.removeClass('show');

        $($images[randomNumber - 1]).addClass('show');
        if (randomNumber === 1 || randomNumber === 3) {
            $('img.show').css('z-index', '2');
        }

        $($images[randomNumber - 1]).css('transform', 'rotate(' + degree + 'deg)');
    }
    $('img.show').css('z-index', '2');
    setInterval(animate, animateTime);
}

function showModal() {
    $('#image-1').click(
        function () {
            $('#showGift').modal('show');
        }
    );

    $('#image-3').click(
        function () {
            $('#showGift').modal('show');
        }
    );
}

bindEvent();