
/* display registered members */
$(document).ready(function(){
    $("#acceptMembersBtn").click(function(){
        $("#acceptMembers").toggle();
         document.getElementById('member').style.display = "none";
        document.getElementById('approvedMembers').style.display ="none";
        document.getElementById('paidMembers').style.display ="none";
        document.getElementById('createUsers').style.display = "none";
        document.querySelector('.summary').style.display = "none";
        
    });
});

/* display cnfirm payment */
$(document).ready(function(){
    $("#approveMembers").click(function(){
        $("#approvedMembers").toggle();
        document.getElementById('acceptMembers').style.display ="none";
        document.getElementById('paidMembers').style.display ="none";
        document.getElementById('createUsers').style.display = "none";
        document.querySelector('.summary').style.display = "none";
        document.getElementById('member').style.display = "none";
    });
});

/* display approved members */
$(document).ready(function(){
    $("#approvedBtn").click(function(){
        $("#paidMembers").toggle();
        document.getElementById('acceptMembers').style.display ="none";
        document.getElementById('approvedMembers').style.display ="none";
        document.getElementById('createUsers').style.display = "none";
        document.querySelector('.summary').style.display = "none";
        document.getElementById('member').style.display = "none";
    });
});

 /* display create new users */
 $(document).ready(function(){
    $("#createBtn").click(function(){
        $("#createUsers").toggle();
        document.getElementById('acceptMembers').style.display ="none";
        document.getElementById('approvedMembers').style.display ="none";
        document.getElementById('paidMembers').style.display ="none";
        document.querySelector('.summary').style.display = "none";
        document.getElementById('member').style.display = "none";
    });
});

/* display member profile */
function displayMemberProfile(id){
    window.open("admin.php?profile="+id,"_parent");
    return;
}

/* get id to approve members */
function approvePayments(id){
    window.open("approve_member.php?approve="+id,"_parent");
    return;
}

/* display submit payment */
$(document).ready(function(){
    $("#paymentBtn").click(function(){
        $("#makePayment").toggle();
        document.getElementById('receipt').style.display = "none";
        document.getElementById('updateProfile').style.display = "none";
        document.querySelector('.summary').style.display = "none";
        document.querySelector('.memberInfo').style.display = "none";
    });
});

/* display receipt */
$(document).ready(function(){
    $("#showReceiptBtn").click(function(){
        $("#receipt").toggle();
        document.getElementById('makePayment').style.display = "none";
        document.getElementById('updateProfile').style.display = "none";
        document.querySelector('.summary').style.display = "none";
        document.querySelector('.memberInfo').style.display = "none";
    });
});

/* display update profile*/
$(document).ready(function(){
    $("#updateBtn").click(function(){
        $("#updateProfile").toggle();
        document.getElementById('receipt').style.display = "none";
        document.getElementById('makePayment').style.display = "none";
        document.querySelector('.summary').style.display = "none";
        document.querySelector('.memberInfo').style.display = "none";
    });
});

/* display menu */
$(document).ready(function(){
    $("#menu").click(function(){
        $("aside").toggle();
    })
})
/* function removeAside(){
    document.querySelector('aside').style
} */


