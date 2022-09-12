'use strict';

var ConfigureTables = (function() {

    var apiURL = `http://localhost:8081/api/`;

    function get(name) {
        if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
            return decodeURIComponent(name[1]);
    }

    function updateRequestStatus(servicerequest) {
        console.log("service request on update.");
        console.log(servicerequest);
    }

    if (window.location.href.indexOf("/categories") > -1) {

        $("#new_model_action_open").show();

        $(".card-header .border-0, h3").text("Categories");

        $("#new_model_action_open").attr("href", "manage-model/?model_type=category");

            // Make a request for a user with a given ID
            axios.get('http://localhost:8081/api/categories')
            .then(function (response) {
                // handle success
                console.log("categories response");
                console.log(response.data);

                $(".thead-light").first("tr").html(`<tr><th scope="col" class="sort" data-sort="name">ID</th><th scope="col" class="sort" data-sort="name">Title</th><th scope="col" class="sort" data-sort="name">Image</th><th scope="col" class="sort" data-sort="name">Order</th></tr>`);

                const tableCategoriesHTML = response?.data?.map((category, idx) => {
                    return `<tr class="tr-category-element-model" data-modelidupdateorsave="${category?.id}">
                        <th scope="row">
                            <div class="align-items-center">
                                ${category?.id}
                            </div>
                        </th>
                        <td  class="align-items-center">
                            ${category?.title}
                        </td>
                        <td class="align-items-center">
                            <img style="width: 4vh; height: 4vh;" src="${category?.image}"/>
                        </td>
                        <td class="align-items-center">
                            ${++idx}
                        </td>
                    </tr>`;
                });

                $("tbody, .list").html(tableCategoriesHTML);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });


            // extra functions events

            $( 'tbody' ).on( 'click', '.tr-category-element-model', function (el) {
                var createRequestExtraHeaders = `?model_type=category&id=${$(this).data( "modelidupdateorsave")}`;
                window.location.href = `/manage-model/${createRequestExtraHeaders}`;
            });

    }




    if (window.location.href.indexOf("/subcategories") > -1) {

        $("#new_model_action_open").show();

        $(".card-header .border-0, h3").text("Subcategories");

        $("#new_model_action_open").attr("href", "manage-model/?model_type=subcategory");

        // Make a request for a user with a given ID
        axios.get('http://localhost:8081/api/subcategories')
        .then(function (response) {
            // handle success
            console.log("subcategories response");
            console.log(response.data);

            $(".thead-light").first("tr").html(`<tr><th scope="col" class="sort" data-sort="name">ID</th><th scope="col" class="sort" data-sort="name">Title</th><th scope="col" class="sort" data-sort="name">Image</th><th scope="col" class="sort" data-sort="name">Category</th><th scope="col" class="sort" data-sort="name">Order</th></tr>`);

            const tableCategoriesHTML = response?.data?.map((subcategory, idx) => {
                return `<tr class="tr-subcategory-element-model" data-modelidupdateorsave="${subcategory?.id}">
                    <th scope="row">
                        <div class="align-items-center">
                            ${subcategory?.id}
                        </div>
                    </th>
                    <td  class="align-items-center">
                        ${subcategory?.title}
                    </td>
                    <td class="align-items-center">
                        <img style="width: 4vh; height: 4vh;" src="${subcategory?.image}"/>
                    </td>
                    <td class="align-items-center">
                        ${subcategory?.category?.title}
                    </td>
                    <td class="align-items-center">
                        ${++idx}
                    </td>
                </tr>`;
            });

            $("tbody, .list").html(tableCategoriesHTML);
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
        .then(function () {
            // always executed
        });


        // extra functions events

        $( 'tbody' ).on( 'click', '.tr-subcategory-element-model', function (el) {
            var createRequestExtraHeaders = `?model_type=subcategory&id=${$(this).data( "modelidupdateorsave")}`;
            window.location.href = `/manage-model/${createRequestExtraHeaders}`;
        });
    }







    if (window.location.href.indexOf("/services") > -1) {

        $("#new_model_action_open").show();

        $(".card-header .border-0, h3").text("Services");

        $("#new_model_action_open").attr("href", "manage-model/?model_type=service");

        // Make a request for a user with a given ID
        axios.get('http://localhost:8081/api/services')
        .then(function (response) {
            // handle success
            console.log("services response");
            console.log(response.data);

            $(".thead-light").first("tr").html(`<tr><th scope="col" class="sort" data-sort="name">ID</th><th scope="col" class="sort" data-sort="name">Title</th><th scope="col" class="sort" data-sort="name">Image</th><th scope="col" class="sort" data-sort="name">subcategory</th><th scope="col" class="sort" data-sort="name">Order</th></tr>`);

            const tableCategoriesHTML = response?.data?.map((service, idx) => {
                return `<tr class="tr-service-element-model" data-modelidupdateorsave="${service?.id}">
                    <th scope="row">
                        <div class="align-items-center">
                            ${service?.id}
                        </div>
                    </th>
                    <td  class="align-items-center">
                        ${service?.title}
                    </td>
                    <td class="align-items-center">
                        <img style="width: 4vh; height: 4vh;" src="${service?.image}"/>
                    </td>
                    <td class="align-items-center">
                        ${service?.subategory?.title}
                    </td>
                    <td class="align-items-center">
                        ${++idx}
                    </td>
                </tr>`;
            });

            $("tbody, .list").html(tableCategoriesHTML);
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
        .then(function () {
            // always executed
        });


        // extra functions events

        $( 'tbody' ).on( 'click', '.tr-service-element-model', function (el) {
            var createRequestExtraHeaders = `?model_type=service&id=${$(this).data( "modelidupdateorsave")}`;
            window.location.href = `/manage-model/${createRequestExtraHeaders}`;
        });
    }

















    // SERVICE REQUEST










    if (window.location.href.indexOf("/service_request") > -1) {


        $(".card-header .border-0, h3").text("Service Requests");

        $("#new_model_action_open").hide();

            // Make a request for a user with a given ID
            axios.get('http://localhost:8081/api/service-request')
            .then(function (response) {
                // handle success
                console.log("categories response");
                console.log(response.data);

                $(".thead-light").first("tr").html(`
                <tr>
                    <th scope="col" class="sort" data-sort="name">ID</th>
                    <th scope="col" class="sort" data-sort="name">Telephone</th>
                    <th scope="col" class="sort" data-sort="name">Request Date</th>
                    <th scope="col" class="sort" data-sort="name">Request Time</th>
                    <th scope="col" class="sort" data-sort="name">Message</th>
                </tr><tr>
                    <th scope="col" class="sort" data-sort="name">Customer Name</th>
                    <th scope="col" class="sort" data-sort="name">Phone</th>
                    <th scope="col" class="sort" data-sort="name">Email</th>
                    <th scope="col" class="sort" data-sort="name">Address</th>
                    <th scope="col" class="sort" data-sort="name">Completed</th>
                </tr><tr>
                    <th scope="col" class="sort" data-sort="name" colspan="5">Additional Services</th>
                </tr>`);

                const tableCategoriesHTML = response?.data?.map((srequest, idx) => {

                    // ${!!srequest?.additionalservices?.map(aservice => "<p>"+aservice?.name+"</p><br>")}
                    console.log(srequest?.additionalservices);
                    let additionaServ = JSON.parse(srequest?.additionalservices);

                    return `<tr>
                        <th scope="row">
                            <div class="align-items-center">
                                ${srequest?.id}
                            </div>
                        </th>
                        <td  class="align-items-center">
                            ${srequest?.phone}
                        </td>
                        <td class="align-items-center">
                            ${srequest?.date}
                        </td>
                        <td class="align-items-center">
                            ${srequest?.time}
                        </td>
                        <td class="align-items-center">
                            ${srequest?.message}
                        </td>
                        </tr>
                        <tr>
                        <td class="align-items-center">
                            ${srequest?.first_name} ${srequest?.last_name}
                        </td>
                        <td class="align-items-center">
                            ${srequest?.customer_phone}
                        </td>
                        <td class="align-items-center">
                            ${srequest?.email}
                        </td>
                        <td class="align-items-center">
                            ${srequest?.street_address} ${srequest?.apartment_no}
                        </td>
                        <td class="align-items-center">
                            ${!!srequest?.status ? '<button type="button" class="btn btn-danger">Revert</button>' : '<button type="button" class="btn btn-primary">Complete</button>'}
                        </td>
                    </tr><tr>
                    <td class="align-items-center" colspan="5">
                        ${additionaServ?.map(aservice => aservice?.name + " ")}
                    </td>
                    </tr>`;
                });

                $("tbody, .list").html(tableCategoriesHTML);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });

    }
    









    // CONTACT FORMS






    if (window.location.href.indexOf("/contact_submissions") > -1) {

        $("#new_model_action_open").hide();


        $(".card-header .border-0, h3").text("Contact Forms");

            // Make a request for a user with a given ID
            axios.get('http://localhost:8081/api/contacts')
            .then(function (response) {
                // handle success
                console.log("categories response");
                console.log(response.data);

                $(".thead-light").first("tr").html(`
                <tr>
                <th scope="col" class="sort" data-sort="name">Phone</th>
                <th scope="col" class="sort" data-sort="name">Name</th>
                <th scope="col" class="sort" data-sort="name">Message</th>
                <th scope="col" class="sort" data-sort="name">Email</th>
                <th scope="col" class="sort" data-sort="name">Address</th>
                <th scope="col" class="sort" data-sort="name">City</th>
                </tr>`);

                const tableCategoriesHTML = response?.data?.map((contactmessage, idx) => {
                    return `<tr>
                        <th scope="row">
                            <div class="align-items-center">
                                ${contactmessage?.phone}
                            </div>
                        </th>
                        <td  class="align-items-center">
                            ${contactmessage?.first_name} ${contactmessage?.last_name}
                        </td>
                        <td class="align-items-center">
                            ${contactmessage?.message}
                        </td>
                        <td class="align-items-center">
                            ${contactmessage?.email}
                        </td>
                        <td class="align-items-center">
                            ${contactmessage?.street_address}
                        </td>
                        <td class="align-items-center">
                            ${contactmessage?.city}
                        </td>
                    </tr>`;
                });

                $("tbody, .list").html(tableCategoriesHTML);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });

    }



















    // CHAT THREADS MESSAGES REPLIES 




    if (window.location.href.indexOf("/messages") > -1) {

        $("#new_model_action_open").hide();


        $(".card-header .border-0, h3").text("Messages");

            // Make a request for a user with a given ID
            axios.get('http://localhost:8081/api/threads')
            .then(function (response) {
                // handle success
                console.log("categories response");
                console.log(response.data);

                $(".thead-light").first("tr").html(`
                <tr>
                <th scope="col" class="sort" data-sort="name">ID</th>
                <th scope="col" class="sort" data-sort="name">Initial Time - Last Update</th>
                <th scope="col" class="sort" data-sort="name">Message #</th>
                <th scope="col" class="sort" data-sort="name">Closed</th>
                </tr>`);

                const tableCategoriesHTML = response?.data?.map((messageThread, idx) => {
                    return `<tr class="tr-thread-element-model" data-modelidupdateorsave="${messageThread?.id}">
                        <th scope="row">
                            <div class="align-items-center">
                                ${messageThread?.id}
                            </div>
                        </th>
                        <td  class="align-items-center">
                            ${messageThread?.created_at} - ${messageThread?.updated_at}
                        </td>
                        <td class="align-items-center">
                            ${messageThread?.messages_count}
                        </td>
                        <td class="align-items-center">
                            ${messageThread?.closed}
                        </td>
                    </tr>`;
                });

                $("tbody, .list").html(tableCategoriesHTML);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });

            $( 'tbody' ).on( 'click', '.tr-thread-element-model', function (el) {
                var createRequestExtraHeaders = `${$(this).data( "modelidupdateorsave")}?id=${$(this).data( "modelidupdateorsave")}`;
                window.location.href = `/message/${createRequestExtraHeaders}`;
            });

    }












    // CHAT MESSAGE LIST




    if (window.location.href.indexOf("/message") > -1) {

        $("#new_model_action_open").hide();

        var messageThreadID = get("id");

        if (messageThreadID) {


            $("#send_message_on_thread").show();

            // "id":1,"message":"Hi test 1","seen":false,"chatthread_id":1,"created_at":"2022-08-29T19:22:06.000000Z","updated_at":"2022-08-29T19:22:06.000000Z"

            $(".card-header .border-0, h3").text("Messages");

            // Make a request for a user with a given ID
            axios.get(`http://localhost:8081/api/messages/${messageThreadID}`)
            .then(function (response) {
                // handle success
                console.log("categories response");
                console.log(response.data);

                $(".thead-light").first("tr").html(`
                <tr>
                <th scope="col" class="sort" data-sort="name">Message</th>
                <th scope="col" class="sort" data-sort="name">Seen</th>
                <th scope="col" class="sort" data-sort="name">Created at</th>
                </tr>`);

                const tableCategoriesHTML = response?.data?.map((message, idx) => {
                    return `<tr>
                        <th scope="row">
                            <div class="align-items-center">
                                ${message?.message}
                            </div>
                        </th>
                        <td  class="align-items-center">
                            ${message?.seen}
                        </td>
                        <td class="align-items-center">
                            ${message?.created_at}
                        </td>
                    </tr>`;
                });

                $("tbody, .list").html(tableCategoriesHTML);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });





            $("#send_message_on_thread").click(function() {
                $("#modal-send-message").modal('show');
            });
    
    
    
            $("#send-message-submit-button").click(function() {
                console.log("thread id ", messageThreadID);

                axios.post('http://localhost:8081/api/message-reply', {
                    reply: $("#exampleFormControlTextarea1dsg").val(),
                    thread: messageThreadID
                }).then(function (response) {
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                });;

                $("#modal-send-message").modal('hide');
            });

        }




    }

















})();