using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using BBBoss.Models;
using System.Data.SqlClient;
using System.Data.Linq.SqlClient;
using LinqToSqlShared;

namespace BBBoss.Controllers
{
    public class ConnectionController : Controller
    {
        //
        // GET: /Checkout/
        public string GetConnectionString()
        {
            return System.Configuration.ConfigurationManager.ConnectionStrings["DefaultConnection"].ConnectionString;
        }

        public ActionResult Phones()
        {
            return View();
        }

        //public void test(string shtuff)
        //{
        //    var connectionstring = GetConnectionString();
        //    BBBoss_SQLDataContext conn = new BBBoss_SQLDataContext();
            
            
        //}

        [HttpPost]
        public ActionResult test(string testshtuff)
        {
            try
            {
                if (ModelState.IsValid)
                {
                    //Create Connection
                    BBBoss_SQLDataContext _conn = new BBBoss_SQLDataContext();
                
                    //Create db object for insert & fill data
                    test _testshtuff = new test();
                    _testshtuff.shtuff = testshtuff;
     
                    //Close DB
                    _conn.tests.InsertOnSubmit(_testshtuff);
                    _conn.SubmitChanges();
                
                }
            }
            catch (Exception)
            {
                
                throw;
            }
            

            // If we got this far, something failed, redisplay form
            return View("Carriers");
        }
    }
}
