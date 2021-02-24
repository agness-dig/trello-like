function removeth(x){
    if(x.parentNode.parentNode.parentNode.getElementsByClassName("card").length == 1){
      x.parentNode.parentNode.parentNode.parentNode.removeChild(x.parentNode.parentNode.parentNode)
    } else {
      x.parentNode.parentNode.removeChild(x.parentNode)
    }
  }