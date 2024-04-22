document.querySelectorAll('.innerblock22').forEach(function(firstDiv) {
    firstDiv.addEventListener('click', function() {
        var divId = this.id;
        document.querySelectorAll('.hidden-div').forEach(function(hiddenDiv) {
            if (hiddenDiv.id === divId) {
                hiddenDiv.style.display = 'block';
                document.querySelectorAll('.innerblock22').forEach(function(div) {
                    if (div !== firstDiv) {
                        div.classList.remove('active'); 
                    }
                });
                firstDiv.classList.add('active'); 
            } else {
                hiddenDiv.style.display = 'none';
            }
        });
    });
});