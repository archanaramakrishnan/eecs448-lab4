function submit() {
  alert("The form was submitted");
}

function validate() {
    console.log("in validate function now");
  var username = document.getElementById("username").value;
  var password = document.getElementById("userPassword").value;

  if (username == "") {
    alert("Username must be filled out");
    return false;
  }
  if (password == "") {
    alert("Password must be filled out");
    return false;
  }

  var item1 = document.getElementById("shopping").elements["PairOfScissors"].value;
  var item2 = document.getElementById("shopping").elements["ElmersGlue"].value;
  var item3 = document.getElementById("shopping").elements["ConstructionPaper"].value;
  var item4 = document.getElementById("shopping").elements["StickyNotes"].value;
  var item5 = document.getElementById("shopping").elements["Tape"].value;

  if (item1 == "" || item2 == "" || item3 == "" || item4 == "" || item5 == "") {
    alert("Quantities of all items must be filled out");
    return false;
  }


  var shipping = document.getElementById("shopping").elements["ship"].value;
  console.log(shipping);

  if(shipping=="")
  {
    alert("Must check some shipping option!");
    return false;
  }

  alert("Your order was submitted!");
  document.getElementById("shopping").submit();
}
