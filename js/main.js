function submitRecord(){
    document.getElementById("form").style.display = "initial";
}

function close1(){
    document.getElementById("form").style.display = "none";
}

/////////// click outside of div to close it //////////////

document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('userinfo');
    if (!container.contains(e.target)) {
      container.style.display = 'none';
    }
  });

function copyToClipboard() {
  let temp = document.createElement('textarea');
  temp.value = shitty.list[0].id;
  document.body.appendChild(temp);
  temp.select();
  document.execCommand('copy');
  document.body.removeChild(temp);
}