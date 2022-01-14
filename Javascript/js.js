let xmlhttp;
//SQL-2 page functions
function showAll()
{
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("showAll").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","../Php_Only/ShowAll.php", true);
    xmlhttp.send();
}
function showAllRed()
{
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("showRed").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","../Php_Only/ShowRed.php", true);
    xmlhttp.send();
}
function showAllRedBlue()
{
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("showRedBlue").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","../Php_Only/ShowRedBlue.php", true);
    xmlhttp.send();
}
function showAllButRed()
{
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("showAllButRed").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","../Php_Only/ShowAllButRed.php", true);
    xmlhttp.send();
}
function showAllWithB()
{
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("showAllWithB").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","../Php_Only/ShowAllWithB.php", true);
    xmlhttp.send();
}
function showAllWithAE()
{
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("showAllWithAE").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","../Php_Only/ShowAllWithAE.php", true);
    xmlhttp.send();
}
function showUnder10Gram()
{
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("show10GramOrLess").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","../Php_Only/Show10GramOrLess.php", true);
    xmlhttp.send();
}
function showBetween10And12()
{
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("showBetween10A12").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","../Php_Only/ShowBetween10A12.php", true);
    xmlhttp.send();
}
function show3Heavy()
{
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("show3Heavy").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","../Php_Only/Show3Heavy.php", true);
    xmlhttp.send();
}
function showRandom()
{
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("showRando").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","../Php_Only/ShowRando.php", true);
    xmlhttp.send();
}
function pageLoading()
{
    showAll();
    showAllRed();
    showAllRedBlue();
    showAllButRed();
    showAllWithB();
    showAllWithAE();
    showUnder10Gram();
    showBetween10And12();
    show3Heavy();
    showRandom();
}

//SQL-3 page functions
function showAllOnClick()
{
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("showAllFromButton").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","../Php_Only/ShowAll.php", true);
    xmlhttp.send();
}

function searching()
{
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("q");
    filter = input.value.toUpperCase();
    table = document.getElementById("bolcheTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i<tr.length; i++)
    {
        td = tr[i].getElementsByTagName("td")[1];
        if (td)
        {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1)
            {
                tr[i].style.display = "";
            }
            else
            {
                tr[i].style.display = "none";
            }
        }
    }



}