<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class PatronController extends Controller
{
    /**
     * @Route(
     *     name = "patron_loans_collection_get",
     *     path = "/patrons/{barcode}/loans",
     *     defaults = {
     *          "_api_resource_class" = PatronAccountLoan::class,
     *          "_api_collection_operation_name" = "patron_loans_collection_get"
     *     }
     * )
     * @Method("GET")
     */
    public function loansGetAction(Request $request, $barcode)
    {
    }

    /**
     * @Route(
     *     name = "patron_loan_item_get",
     *     path = "/patrons/{barcode}/loans/{id}",
     *     defaults = {
     *          "_api_resource_class" = PatronAccountLoan::class,
     *          "_api_item_operation_name" = "patron_loan_item_get"
     *     }
     * )
     * @Method("GET")
     */
    public function loanGetAction(Request $request, $barcode, $id)
    {
    }
}