
 $(document).ready(function(){
    const measure = $('select#measure')
    const ammount = $('input#num')
    const timer = $('#timer')
    const s = $(timer).find('.seconds')
    const m = $(timer).find('.minutes')
    const h = $(timer).find('.hours')

    const inter = 60000;

    

    var seconds = 0
    var minutes = 0
    var hours = 0

    var interval = null;

    var clockType = undefined;



        if($(ammount).val() != '' && $(ammount).val() > 0 && $(measure).val() != 0) {
            clockType = 'countdown'
            startClock()
        }
        else if ($(ammount).val() == '') {
            alert('Type in the Ammount')
        }
        else if ($(measure).val() == 0) {
            alert('Select the Unit')
        }

    function pad(d) {
        return (d < 10) ? '0' + d.toString() : d.toString()
    }

    function startClock() {
        hasStarted = false
        hasEnded = false

        seconds = 0
        minutes = 0
        hours = 0

        switch ($(measure).val()) {
            case 's':
                if ($(ammount).val() > 3599) {
                    let hou = Math.floor($(ammount).val() / 3600)
                    hours = hou
                    let min = Math.floor(($(ammount).val() - (hou * 3600)) / 60)
                    minutes = min;
                    let sec = ($(ammount).val() - (hou * 3600)) - (min * 60)
                    seconds = sec
                }
                else if ($(ammount).val() > 59) {
                    let min = Math.floor($(ammount).val() / 60)
                    minutes = min
                    let sec = $(ammount).val() - (min * 60)
                    seconds = sec
                }
                else {
                    seconds = $(ammount).val()
                }
                break
            case 'm':
                if ($(ammount).val() > 59) {
                    let hou = Math.floor($(ammount).val() / 60)
                    hours = hou
                    let min = $(ammount).val() - (hou * 60)
                    minutes = min
                }
                else {
                    minutes = $(ammount).val()
                }
                break
            case 'h':
                hours = $(ammount).val()
                break
            default:
                break
        }

        if (seconds <= 60 && clockType == 'countdown' && minutes == 0 && hours == 0) {
          $(timer).find('span').addClass('red')
        }

        refreshClock()

        $('.input-wrapper').hide()
        setTimeout(function(){
            $('#timer').fadeIn(350)
            $('#stop-timer').fadeIn(350)

        }, 350)

       switch (clockType) {
           case 'countdown':
                countdown()
                break
            case 'cronometer':
                cronometer()
                break
           default:
               break;
       }
    }

    function countdown() {
        hasStarted = true
        interval = setInterval(() => {
            if(hasEnded == false) {
                if (minutes <= 10 && hours == 0) {
                  $(timer).find('span').addClass('red')
                }

                if(seconds == 0 && minutes == 0 || (hours > 0  && minutes == 0 && seconds == 0)) {
                    hours--
                    minutes = 59
                    seconds = 60
                    refreshClock()
                }

                if(seconds > 0) {
                    seconds--
                    refreshClock()
                }
                else if (seconds == 0) {
                    minutes--
                    seconds = 59
                    refreshClock()
                }
            }
            else {
                restartClock()
            }

        }, 1000)
    }

    function refreshClock() {
        $(s).text(pad(seconds))
        $(m).text(pad(minutes))
        if (hours < 0) {
            $(s).text('00')
            $(m).text('00')
            $(h).text('00')
        } else {
            $(h).text(pad(hours))
        }

        if (hours == 0 && minutes == 0 && seconds == 0 && hasStarted == true) {
            hasEnded = true
            alert("TIME OUT")
            // window.location = "index.php";
        }
    }

    function clear(intervalID) {
        clearInterval(intervalID)
        console.log('cleared the interval called ' + intervalID)
    }
})
