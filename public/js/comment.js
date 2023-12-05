$(function () {
  $.ajax({
    url: "/result/ajax",
    dataType: "json"
  }).done(function(data){
    $("#comment-data")
      .find(".comment-visible")
      .remove();
    // console.log(data.comments);
    for (let i = 0; i < data.comments.length; i++) {
      const html = `
            <div class="media comment-visible">
                <div class="media-body comment-body">
                    <div class="row">
                        <span class="comment-body-user">${data.comments[i].name}</span>
                        <span class="comment-body-time">${data.comments[i].created_at}</span>
                    </div>
                    <span class="comment-body-content">${data.comments[i].comment}</span>
                </div>
            </div>
          `;

      $("#comment-data").append(html);

      console.log(data.comments[i].name);
      console.log(data.comments[i].comment);
    }
  }).fail(function(){
    alert("コメントの取得に失敗しました。");
  });
});
