import './app'
window.Echo.channel('my-channel')
    .listen('.my-event1', (e) => {
        document.getElementById('card').innerHTML +=
            `
            <div class="d-inline-block w-25 ">
            <div class="card ms-3 mb-3" >
                    <div class="card-header text-center">
                       <a href="#" class="text-decoration-none text-black"> <span class="fw-bold">${e.name}</span>'s Post</a>
                    </div>
                    <div class="card-body" style="background-color: #dfe6e9">
                        <img src="../storage/posts-media/${e.media}" class="w-100 rounded">
                        <p class="card-text">${e.content}</p>
                        <div style="border:solid 0.5px #b2bec3; height:1px;" class="mb-2 mt-2"></div>
                        <a href="" class="btn btn-outline-success"><i class="fa-solid fa-heart"></i></a>
                        <a href="" class="btn btn-outline-secondary"><i
                                class="fa-solid fa-comment"></i></a>
                        <div id="comment-count">
                            Comments : ${e.count} -
                            Like :
                        </div>
                    </div>
                </div>
            </div>
        `
    });