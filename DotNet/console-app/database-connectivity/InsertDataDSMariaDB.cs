using MySql.Data.MySqlClient;

public class InsertDataDSMariaDB
{
    public void SetData(int admission_no, string name)
    {
        MySqlConnection connection = new MySqlConnection("server=localhost; uid=onlits2201; pwd=onlits2201; database=crud_test_2201");
        MySqlCommand command = new MySqlCommand();
        connection.Open();

        connection.Close();
    }
}