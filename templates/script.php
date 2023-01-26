 <script>
	console.log('Funding');
    if(document.querySelector('.funding-banner')) {
		const fundingBanner = document.querySelector('.funding-banner');

		function closeBanner() {
			fundingBanner.classList.add('funding-removed');
			document.cookie = "funding=seen;SameSite=Lax";
		}

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
			fundingBanner.classList.add('funding-removed');
		} else {
			setTimeout(function() {
				fundingBanner.classList.add('funding-removed');
			}, 5000);
		}
	}
</script>
