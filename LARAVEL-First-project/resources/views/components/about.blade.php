<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p id="about-title" class="lead fw-light mb-4">My name is Start Bootstrap and I help brands grow.</p>
                    <p id="about-des" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a target="_blank" id="twitterLink" class="text-gradient" href=""><i class="bi bi-twitter"></i></a>
                        <a target="_blank" id="linkedinLink" class="text-gradient" href=""><i class="bi bi-linkedin"></i></a>
                        <a target="_blank" id="githubLink" class="text-gradient" href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Ajax call --}}
<script>
    // About Details call
    getAboutDetail()
    async function getAboutDetail() {
        try {
            let URL='/aboutData';
            let response=await axios.get(URL);
            document.getElementById('about-title').innerHTML=response.data.title;
            document.getElementById('about-des').innerHTML=response.data.details;
        } catch (error) {
            alert(error)
        }
    }

    // Social Link call
    getSocialLink()
    async function getSocialLink() {
        try {
            let URL='/socialData';
            let response=await axios.get(URL);

            // Loader Show
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            document.getElementById('twitterLink').href=response.data['twitterLink'];
            document.getElementById('linkedinLink').href=response.data['linkedinLink'];
            document.getElementById('githubLink').href=response.data['githubLink'];
        } catch (error) {
            alert(error)
        }
    }
</script>
