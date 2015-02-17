using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using BBBoss.Models;
using BBBoss.Controllers;
using BBBoss.DataContexts;
using System.Data.SqlClient;
using System.Data.Linq.SqlClient;
using LinqToSqlShared;

namespace BBBoss.Controllers
{
    public class CheckoutController : Controller
    {
        BBBoss_SQLDataContext dbconnect = new BBBoss_SQLDataContext();
        
        
        public ActionResult Phones()
        {
            return View();
        }

        //public void test(string shtuff)
        //{
        //    var connectionstring = GetConnectionString();
        //    BBBoss_SQLDataContext conn = new BBBoss_SQLDataContext();
            
            
        //}

        public ActionResult SelectBrand(string _brand)
        {   
            CheckoutModels order = new CheckoutModels();
            order.brand = _brand;
            return View("Carriers");
        }
        

        [HttpPost]
        public ActionResult test(string testshtuff)
        {
            try
            {
                if (ModelState.IsValid)
                {
                    //Create Connection
                    
                
                    //Create db object for insert & fill data
                    test _testshtuff = new test();
                    _testshtuff.shtuff = testshtuff;
     
                    //Close DB
                    dbconnect.tests.InsertOnSubmit(_testshtuff);
                    dbconnect.SubmitChanges();
                
                }
            }
            catch (Exception)
            {
                
                throw;
            }
            return View("Carriers");
        }
    }
}
