require 'json'


MyApp.add_route('GET', '/store/inventory'.gsub /{(.*?)}/, ':\1', {
  "resourcePath" => "/Store",
  "summary" => "Returns pet inventories by status",
  "nickname" => "get_inventory", 
  "responseClass" => "map[string,int]", 
  "endpoint" => "/store/inventory".gsub/{(.*?)}/, ':\1', 
  "notes" => "Returns a map of status codes to quantities",
  "parameters" => [
    
    
    
    
    ]}) do
  cross_origin
  # the guts live here

  {"message" => "yes, it worked"}.to_json
end


MyApp.add_route('POST', '/store/order'.gsub /{(.*?)}/, ':\1', {
  "resourcePath" => "/Store",
  "summary" => "Place an order for a pet",
  "nickname" => "place_order", 
  "responseClass" => "Order", 
  "endpoint" => "/store/order".gsub/{(.*?)}/, ':\1', 
  "notes" => "",
  "parameters" => [
    
    
    
    {
      "name" => "body",
      "description" => "order placed for purchasing the pet",
      "dataType" => "",
      "paramType" => "body",
    }
    
    ]}) do
  cross_origin
  # the guts live here

  {"message" => "yes, it worked"}.to_json
end


MyApp.add_route('GET', '/store/order/{orderId}'.gsub /{(.*?)}/, ':\1', {
  "resourcePath" => "/Store",
  "summary" => "Find purchase order by ID",
  "nickname" => "get_order_by_id", 
  "responseClass" => "Order", 
  "endpoint" => "/store/order/{orderId}".gsub/{(.*?)}/, ':\1', 
  "notes" => "For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions",
  "parameters" => [
    
    {
      "name" => "order_id",
      "description" => "ID of pet that needs to be fetched",
      "dataType" => "",
      "paramType" => "path",
    },
    
    
    
    ]}) do
  cross_origin
  # the guts live here

  {"message" => "yes, it worked"}.to_json
end


MyApp.add_route('DELETE', '/store/order/{orderId}'.gsub /{(.*?)}/, ':\1', {
  "resourcePath" => "/Store",
  "summary" => "Delete purchase order by ID",
  "nickname" => "delete_order", 
  "responseClass" => "void", 
  "endpoint" => "/store/order/{orderId}".gsub/{(.*?)}/, ':\1', 
  "notes" => "For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors",
  "parameters" => [
    
    {
      "name" => "order_id",
      "description" => "ID of the order that needs to be deleted",
      "dataType" => "",
      "paramType" => "path",
    },
    
    
    
    ]}) do
  cross_origin
  # the guts live here

  {"message" => "yes, it worked"}.to_json
end

