$(document).ready(function() {

    $(".navbar-toggle-trigger").click(() => {
        if ($(".navbar-toggle-trigger .icon-bar").hasClass("active")) {
            $(".navbar-toggle-trigger .icon-bar").removeClass("active")
            $(".navbar-collapse-target").animate({ "left": "-500px" }, "fast").removeClass('active');
        } else {
            $(".navbar-toggle-trigger .icon-bar").addClass("active")
            $(".navbar-collapse-target").animate({ "left": "0px" }, "fast").addClass('active');
        }
    })

    const wordwrap = (str, width, brk, cut) => {
        brk = brk || '<br>';
        width = width || 20;
        cut = cut || false;
        if (!str) { return str; }
        var regex = '.{1,' + width + '}(\s|$)' + (cut ? '|.{' + width + '}|.+$' : '|\S+?(\s|$)');
        return str.match(RegExp(regex, 'g')).join(brk);
    }

    const login = (username, password) => {
        $.ajax({
            type: 'POST',
            url: 'model/indexLogin.php',
            data: { loginBtn: 1, username, password },
            success: (response) => {
                if (response.includes("http")) {
                    window.open(response, '_self')
                } else if (response != "" && response != undefined && response != null) {
                    $(".loginErrorMsgContainer").addClass("active")
                    $(".loginErrorMsg").text(response)
                    $('#loginForm').trigger("reset")
                }
            }
        })
    }

    const search = (choicesSingleDefaul, searchVal) => {
        $.ajax({
            type: 'POST',
            url: 'model/homeSearch.php',
            data: { searchBtn: 1, choicesSingleDefaul, searchVal },
            dataType: "json",
            success: (response) => {
                if (response != "" && response != undefined && response != null) {
                    $(".totResltCunt").html("&nbsp;" + Object.keys(response).length)
                    $.each(response, function(key, value) {
                        $(".homeTableDataRow").append(`<tr class="bg-dark text-light fw-bolder">`)
                        $(`.homeTableDataRow tr:nth-child(${key+1})`).append(`<td>${key+1}</td>`)
                        $(`.homeTableDataRow tr:nth-child(${key+1})`).append(`<td><a class="bg-light p-1" href="profile.php?id=${value.id}">${value.fname+value.lname}</a></td>`)
                        $(`.homeTableDataRow tr:nth-child(${key+1})`).append(`<td>${value.sex}</td>`)
                        $(`.homeTableDataRow tr:nth-child(${key+1})`).append(`<td>${wordwrap(value.address,20)}</td>`)
                        $(`.homeTableDataRow tr:nth-child(${key+1})`).append(`<td>${value.city}</td>`)
                        $(`.homeTableDataRow tr:nth-child(${key+1})`).append(`<td>${value.status}</td>`)
                        $(`.homeTableDataRow tr:nth-child(${key+1})`).append(`<td>${value.mobile}</td>`)
                        $(`.homeTableDataRow tr:nth-child(${key+1})`).append(`<td>${value.bed_no}</td>`)
                        $(".homeTableDataRow").append(`</tr>`)
                    });
                }
            }
        })
    }

    const addNewPatient = (fname, lname, sex, bed_no, bday, address, city, status, prv_decs, bd_gp, weight, height, mobile) => {
        $.ajax({
            type: 'POST',
            url: 'model/addPatient.php',
            data: { addPatientFormSubBtn: 1, fname, lname, sex, bed_no, bday, address, city, status, prv_decs, bd_gp, weight, height, mobile },
            success: (response) => {
                if (response != "" && response != undefined && response != null) {
                    if (response) {
                        $(".addPatientErrorMsgContainer").addClass("active alert-success")
                        $(".addPatientErrorMsgContainer .addPatientErrorMsg").text("Added Successfully To DataBase!")
                        $('#addPatient').trigger("reset")
                    } else if (!response) {
                        $(".addPatientErrorMsgContainer").addClass("active alert-danger")
                        $(".addPatientErrorMsgContainer .addPatientErrorMsg").text("Unable To Submit Form!")
                    }
                }
            }
        })
    }

    $(".loginBtnindexPage").click((e) => {
        e.preventDefault()
        if ($(".loginUsername").val() != "" && $(".loginPassword").val() != "") {
            login($(".loginUsername").val(), $(".loginPassword").val())
        } else {
            $(".loginErrorMsgContainer").addClass("active")
            $(".loginErrorMsg").text("All Fields Are Required!")
            $('#loginForm').trigger("reset")
        }
    })

    $(".homeSearchBtn").click((e) => {
        e.preventDefault()
        if ($(".homeSelect").val() != "" && $(".homeSearch").val() != "") {
            $(".totResltCunt").text("")
            $(".homeTableDataRow").html("")
            search($(".homeSelect").val(), $(".homeSearch").val())
            $('#homeForm').trigger("reset")
        }
    })

    $(".addPatientFormSubBtn").click((e) => {
        e.preventDefault()

        let textarea = $("form[class*='addPatient'] textarea").val()
        let checked = $("form[class*='addPatient'] input[type='radio']:checked").val()
        let select = $("form[class*='addPatient'] select").val()
        let errorArray = ["", undefined, null]
        let errorCnt = 0
        let x = document.querySelectorAll("form[class*='addPatient'] input[required='true']")
        let valuesGet = {}

        if (textarea == "") {
            $("form[class*='addPatient'] textarea").css({
                "border": "1px solid red",
                "boxShadow": "inset 0px 0px 20px 0px red"
            })
        }

        $("form[class*='addPatient'] textarea").click(function() {
            $(this).css({
                "border": "",
                "boxShadow": ""
            })
        })

        x.forEach(function(el) {
            if (!errorArray.includes(el.value)) {
                $(`#${el.id}`).css({
                    "border": "",
                    "boxShadow": ""
                })
                Object.assign(valuesGet, {
                    [`${ el.name }`]: `${el.value}`
                });
                errorCnt = 0
            } else {
                $(`#${el.id}`).css({
                    "border": "1px solid red",
                    "boxShadow": "inset 0px 0px 20px 0px red"
                })
                errorCnt = 1
            }
        })

        if (!errorArray.includes(textarea) && !errorArray.includes(checked) && !errorArray.includes(select) && errorCnt == 0) {
            addNewPatient(valuesGet.fname, valuesGet.lname, checked, valuesGet.bed_no, valuesGet.bday, textarea, valuesGet.city, valuesGet.status, valuesGet.prv_decs, select, valuesGet.weight, valuesGet.height, valuesGet.mobile)
        }
    })

    $("form[class*='addPatient'] input").click(function() {
        $(this).css({
            "border": "",
            "boxShadow": ""
        })
    })

});