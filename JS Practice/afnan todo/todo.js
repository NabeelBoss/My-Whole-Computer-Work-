function addList() {

    document.getElementById("error").innerHTML = ""
    var name = document.getElementById("name").value;

    if (name == "") {

        document.getElementById("error").innerHTML = "PLEASE ENTER THE VALUE CORRECTLY."

    } else {

        var box = document.getElementById("box")

        var listCreated = document.createElement("li");
        listCreated.className = "listName"

        listCreated.textContent = name;

        box.appendChild(listCreated)

        var a = document.createElement("a")

        a.textContent = "X"
        a.href = "javascript:void(0)"
        a.className = "deleteList"

        listCreated.appendChild(a)

    }
    document.getElementById("name").value = "";

}