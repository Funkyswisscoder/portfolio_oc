let repoWrapper = document.getElementById('repoWrapper');



function getGit(){

    const req = new XMLHttpRequest();

    req.onreadystatechange = function(e){
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                let resJson = JSON.parse(this.responseText);
                
                let myCommits = resJson.slice(0, 3);

                
                for(let i = 0; i < myCommits.length; i++){

                    console.log(myCommits[i].commit.message)

                    let commitsDiv = document.createElement('div');


                    commitsDiv.className = 'commitClass';
                    commitsDiv.innerText = myCommits[i].commit.message;

                    repoWrapper.appendChild(commitsDiv)


                  };


            } else {
                console.log("Status de la réponse: %d (%s)", req.status, req.statusText);
            }
        };        
    }

    req.open('GET', 'https://api.github.com/repos/funkyswisscoder/portfolio_oc/commits', true); 
    req.send(null);
}

window.onload = getGit;



/*
function getGit() {
    const userAction = async () => {
        const response = await fetch('https://api.github.com/repos/funkyswisscoder/portfolio_oc/commits');
        const myJson = await response.json(); //extract JSON from the http response
        console.log(myJson);
        let myParsedJson = JSON.parse(myJson);
    
        console.log(myParsedJson);
    };
};

*/
