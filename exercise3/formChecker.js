function submit() {
  alert("The form was submitted");
}

function validate() {
    console.log("in validate function now");
  var username = document.getElementById("username").value;
  var password = document.getElementById("userPassword").value;
  var item1 = document.getElementById("PairOfScissors").value;
  var item2 = document.getElementById("ElmersGlue").value;
  var item3 = document.getElementById("ConstructionPaper").value;
  var item4 = document.getElementById("shopping").elements["StickyNotes"].value;
  var item5 = document.getElementById("shopping").elements["Tape"].value;

  console.log(item1);
  console.log(item2);
  console.log(item3);
  console.log(item4);
  console.log(item5);

  if (username == "") {
    alert("Username must be filled out");
    return false;
  }
  if (password == "") {
    alert("Password must be filled out");
    return false;
  }

  if (item1 == "" || item2 == "" || item3 == "" || item4 == "" || item5 == "") {
    alert("Quantities of all items must be filled out");
    return false;
  }

  if (item1 < 0 || item2 < 0 || item3 < 0 || item4 < 0 || item5 < 0) {
    alert("Quantities of all items must be a positive number or zero");
    return false;
  }


  var shipping = document.getElementById("shopping").elements["ship"].value;

  if(shipping=="")
  {
    alert("Must check some shipping option!");
    return false;
  }

  alert("Your order was submitted!");
  document.getElementById("shopping").submit();
}
