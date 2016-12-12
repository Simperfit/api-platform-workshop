<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource(
 *     collectionOperations = {
 *          "get" = {
 *              "method" = "GET",
 *              "route_name" = "patron_loans_collection_get",
 *              "swagger_context" = {
 *                  "parameters" = {
 *                      {
 *                          "name" = "barcode",
 *                          "required" = true,
 *                          "type" = "string",
 *                          "in" = "path",
 *                          "description" = "Patron Barcode"
 *                      },
 *                      {
 *                          "name" = "institution",
 *                          "type" = "string",
 *                          "required" = true,
 *                          "in" = "query",
 *                          "description" = "Institution code"
 *                      }
 *                  },
 *                  "produces" = {
 *                      "application/ld+json",
 *                      "application/json"
 *                  }
 *              }
 *          }
 *     },
 *     itemOperations = {
 *          "get" = {
 *              "method" = "GET",
 *              "route_name" = "patron_loan_item_get",
 *              "swagger_context" = {
 *                  "parameters" = {
 *                      {
 *                          "name" = "barcode",
 *                          "required" = true,
 *                          "type" = "string",
 *                          "in" = "path",
 *                          "description" = "Patron Barcode"
 *                      },
 *                      {
 *                          "name" = "id",
 *                          "required" = true,
 *                          "type" = "string",
 *                          "in" = "path",
 *                          "description" = "Loan Id"
 *                      },
 *                      {
 *                          "name" = "institution",
 *                          "type" = "string",
 *                          "required" = true,
 *                          "in" = "query",
 *                          "description" = "Institution code"
 *                      }
 *                  },
 *                  "produces" = {
 *                      "application/json"
 *                  }
 *              }
 *          }
 *     }
 * )
 */
class PatronAccountLoan {}