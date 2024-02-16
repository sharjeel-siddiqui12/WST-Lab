(function() {
    var link = document.createElement('link');
    link.type = 'image/x-icon';
    link.rel = 'icon';
    link.href = '/assets/img/logo.ico';
    document.getElementsByTagName('head')[0].appendChild(link);
})();



fetch('/assets/in.html')
.then(response => response.text())
.then(html => {
    document.body.insertAdjacentHTML('afterbegin', html);
})
.catch(error => console.error('Error fetching header:', error));



