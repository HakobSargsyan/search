$( document ).ready(function() {
    $(".btn-search").on("click",function () {
        var search = $(".searchable").val();
        var client = algoliasearch('DFPDKQOME0', '758c0bc521103ffa4880029bf21db910');
        var index = client.initIndex('contacts');

        $(".result").text(" ");

        // perform query "jim"
        //index.search(search.toLowerCase(), searchCallback);

        // the last optional argument can be used to add search parameters
        index.search(
            search.toLowerCase(), {
                hitsPerPage: 1,
                facets: '*',
                maxValuesPerFacet: 10
            },
            searchCallback
        );
        function searchCallback(err, content) {
            console.log(content);
            if (err) {
                console.error(err);
                return;
            }
            $(".result").prepend(content.hits[0].lastname)
            console.log(content.hits[0].lastname);
        }
    })
});