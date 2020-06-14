<h2 class="text-uppercase font-weight-bold text-center">Request <span class="text-warning">For Quote</span></h2>
<p class="text-justify">
Please submit your details and request for quotation (RFQ) using the form below and one of our team members will get in touch with you shortly.
</p>
       <?= form_open();?>
                <table class=" form-group" cellpadding="10" width="100%">
                    <tr>
                        <td>
                            <input class="form-control" type="text" name="name" placeholder=" Your Name" autocomplete="off">
                        </td>
                        <td>
                            <input class="form-control" type="email" name="email" placeholder=" E-mail" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" ><textarea class="form-control" name="message" placeholder=" Message" rows="5" autocomplete="off"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="text-uppercase btn btn-outline-warning text-uppercase font-weight-bold form-control">Submit Now</button>
                        </td>
                    </tr>
                </table>
       </form> 