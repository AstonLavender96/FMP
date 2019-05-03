var sessionid = 0;
function init(){
	document.getElementById("searchPeople").addEventListener("click", findPeople);
	sesh();
}
function sesh(){
    var sessionCheck = new XMLHttpRequest();
    sessionCheck.addEventListener("load", e =>
    {
        var response = e.target.responseText;
        sessionid = response;
    })
    sessionCheck.open("GET" , `session.php`);
    sessionCheck.send();
}

function findPeople(){
    var a = document.getElementById('inputGroupSelect01').value;
    var b = document.getElementById('inputGroupSelect02').value;

    var ajaxConnection = new XMLHttpRequest();

    ajaxConnection.addEventListener("load", e =>
    {
        var output = "";
        var allPeople = JSON.parse(e.target.responseText);

        allPeople.forEach( curPerson =>
        {
            output = output + `
                <div class="card">
                    <div class="card-body ">
                    <h5 class="card-title">${curPerson.username}</h5>
                    <p class="card-text">${curPerson.description}</p>
                    <form action="chatroom.php" method="post">
                        <input type="hidden" name="sender" value="${sessionid}"/>
                        <input type="hidden" name="receiver" value="${curPerson.id}" />
                        <input type="submit" class="sendmsg" value="Message this person!" />
                    </form>
                    </div>
                </div>`;
        });

        document.getElementById("card-deck").innerHTML= output;
	   document.getElementById("searchPeople").addEventListener("click", popup);



    })

    ajaxConnection.open("GET" , `findpeople.php?inputGroupSelect01=${a}&inputGroupSelect02=${b}`);

    ajaxConnection.send();
}