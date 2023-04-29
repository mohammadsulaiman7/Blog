import './app'
window.Echo.channel('my-channel')
.listen('.my-event', (e) => {
    document.getElementById('ol').innerHTML += `<li class="list-group-item">
    <span><img src="../storage/profile-pictures/${e.profile}" style="width:30px;height:30px" class="rounded-circle">
        <span class="text-primary fw-bold">${e.name}</span> : 
           ${e.comment}
    </li>`;
});