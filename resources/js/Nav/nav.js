

   
    const sectionResultsOptions = {
        rootMargin: " -400px 0px 0px 0px"
      
    };

    window.startObserver = () => {
        const header = document.querySelector("header");
        const sectionResults = document.querySelector(".hero__container");


    const sectionResultsObserver = new IntersectionObserver(function(
        entries,
        sectionResultsObserver
        ) {
        entries.forEach(entry => {
         
            if (!entry.isIntersecting) {
            header.classList.add("nav-scrolled");
            } else {
            header.classList.remove("nav-scrolled");
            }
        });
        },
        sectionResultsOptions);

        sectionResultsObserver.observe(sectionResults);
    }

