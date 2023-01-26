 
    const partner = document.querySelector('.partner');
    const btnClose = document.querySelector(".btn-close");
       btnClose.addEventListener('click', () => {
           partner.classList.add('partner-removed');
           document.cookie = "funding=seen;SameSite=Lax";
          
     });

    function getCookie(name) {
        const dc = document.cookie;
        let end = dc.length;
        const prefix = name + "=";
        let begin = dc.indexOf("; " + prefix);
        if (begin === -1) {
            begin = dc.indexOf(prefix);
            if (begin !== 0) return null;
        } else {
            begin += 2;
            end = document.cookie.indexOf(";", begin);
            if (end === -1) {
                end = dc.length;
            }
        }
        return decodeURI(dc.substring(begin + prefix.length, end));
    }

    const fundingCookie = getCookie("funding");

    if (fundingCookie !== null) {
        partner.classList.add('partner-removed');
    } else {
        setTimeout(function() {
           partner.classList.add('partner-removed');
        }, 5000);
    }
