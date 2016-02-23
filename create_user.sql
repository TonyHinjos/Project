-- Create impact user
CREATE USER 'landgis'@'localhost' IDENTIFIED BY 'landgis>otero12345625lll>?>>';
-- Grant permissions to impact user
GRANT INSERT ON landgis_db.* TO 'landgis'@'localhost';
GRANT DELETE ON landgis_db.* TO 'landgis'@'localhost';
GRANT UPDATE ON landgis_db.* TO 'landgis'@'localhost';
GRANT SELECT ON landgis_db.* TO 'landgis'@'localhost';
-- Reload permissions 
FLUSH PRIVILEGES;

