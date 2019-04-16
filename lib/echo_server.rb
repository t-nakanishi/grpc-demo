this_dir = File.expand_path(File.dirname(__FILE__))
lib_dir = File.join(this_dir, 'lib')
$LOAD_PATH.unshift(lib_dir) unless $LOAD_PATH.include?(lib_dir)

require 'logger'
require 'grpc'
require 'echo_services_pb'

class EchoServer < Echo::Echo::Service
  EchoLogger = Logger.new(STDOUT)

  def echo(echo_req, _unused_call)
    EchoLogger.info("echo \"#{echo_req.message}\"")
    Echo::EchoResponse.new(message: echo_req.message)
  end
end

def main
  s = GRPC::RpcServer.new
  s.add_http2_port('0.0.0.0:50051', :this_port_is_insecure)
  logger = Logger.new(STDOUT)
  logger.info("... running insecurely on 0.0.0.0:50051")
  s.handle(EchoServer)
  s.run_till_terminated_or_interrupted(['SIGHUP','SIGINT','SIGQUIT'])
end

main

# bungle exec ruby echo_server.rb
