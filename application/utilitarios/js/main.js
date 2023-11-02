// Implementacion de metodos de llamdo 
//fetch con async await: en php se recibe como: $info = json_decode(file_get_contents('php://input'), true);
async function metfetch(url_ = "", args = {}, method='POST') {
    try {
      $.LoadingOverlay("show", {
        image: "",
        fontawesome: "fa fa-spinner fa-spin",
      });
      const response = await fetch(url_, {
        method: method, // *GET, POST, PUT, DELETE, etc.
        mode: "cors", // no-cors, *cors, same-origin
        cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
        credentials: "include", // include, *same-origin, omit
        headers: {
          'Content-Type': 'application/json;charset=utf-8'
        },
        redirect: "follow", // manual, *follow, error
        referrerPolicy: "no-referrer", // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
        body: JSON.stringify(args), // body args type must match "Content-Type" header
      });
      $.LoadingOverlay("hide");
      return response.json(); 
    } catch (error) {
      return {code:0} 
    }
  }
  async function async_call_fetch(url_,args,method='POST') {
    return result = await metfetch(url_,args,method);
  }
  //Fin fetch async await
  
  //Promise ajax
  function resolveAfter(url_, args,method = 'POST') {
    return new Promise(resolve => {
      $.ajax({
        url: url_,
        type: method,
        data: args,
        dataType: "json",
        async: true,
        beforeSend: function () {
          $.LoadingOverlay("show", {
            image: "",
            fontawesome: "fa fa-spinner fa-spin",
          });
        },
        success: function (response) {
          resolve(response)
        },
        complete: function () {
          $.LoadingOverlay("hide");
        },    
      })
    });
  }
  
  async function asyncCall(url_,args,method = 'POST') {
    return result = await resolveAfter(url_,args,method = 'POST');
  }
  //Fin promise ajax
  
  //ajax async await
  async function myAjax(url_,args,method = 'POST') {
    try {
      return await $.ajax({
        url: url_,
        type: method,
        data: args,
        dataType: "json",
        async: true,
        beforeSend: function () {
          $.LoadingOverlay("show", {
            image: "",
            fontawesome: "fa fa-spinner fa-spin",
          });
        },
        success: function (response) {
        },
        complete: function () {
          $.LoadingOverlay("hide");
        },    
      })
    } catch (error) {
      return {code:0}
    }
  }
  
  async function async_call_ajax(url_,args,method = 'POST') {
    return result = await myAjax(url_,args,method);
  }
  // Fin ajax async await
  /**Fin llamado fetch */