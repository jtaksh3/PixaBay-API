function validateKeyword(input)
{
    if(input.value.trim().length)
    {
        $('#search-btn').css('display', 'block');
    }
    else
    {
        $('#search-btn').css('display', 'none');
        $('#search-results').css('display', 'none');
    }
}

$("#search-btn").on("click", function(event) {
    event.preventDefault();
    // Validate signup form details here
    let keyword = $('[name="keyword"]').val();
    let type = $("input[name='choice']:checked").val();
    
    $.ajax({
        url: "GetAPI",
        method: "POST",
        dataType: "json",
        contentType: "application/json",
        data: JSON.stringify({
            keyword: keyword,
            type: type
        }),
        beforeSend: function()
        {
            $("#search-preview").empty();
        },
        success: function(response)
        {
            $('#search-results').css('display', 'block');
            
            if(type == 'Image')
            {
                var i = 0;
                while(response.api.hits[i])
                {
                    var x = document.createElement("IMG");
                    x.setAttribute("src", response.api.hits[i].previewURL);
                    x.setAttribute("width", "200");
                    x.setAttribute("height", "300");
                    x.style.margin = "15px 20px";
                    document.getElementById("search-preview").appendChild(x);
                    i++;
                }
            }
            else
            {
                var i = 0;
                while(response.api.hits[i])
                {
                    var x = document.createElement("VIDEO");
                    x.setAttribute("src", response.api.hits[i].videos.medium.url);
                    x.setAttribute("width", "200");
                    x.setAttribute("height", "300");
                    x.setAttribute("controls", "controls");
                    x.style.margin = "15px 20px";
                    document.getElementById("search-preview").appendChild(x);
                    i++;
                }
            }
        }
    });
});